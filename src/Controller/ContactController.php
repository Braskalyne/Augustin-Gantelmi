<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Créer l'email
            $email = (new Email())
                ->from($data['email'])
                ->to('augustin.dille@yahoo.fr') // Votre email
                ->subject('Nouveau message de contact : ' . $data['subject'])
                ->text(sprintf(
                    "Nom: %s\nEmail: %s\nSujet: %s\n\nMessage:\n%s",
                    $data['name'],
                    $data['email'],
                    $data['subject'],
                    $data['message']
                ))
                ->html(sprintf(
                    '<h2>Nouveau message de contact</h2>
                    <p><strong>Nom:</strong> %s</p>
                    <p><strong>Email:</strong> %s</p>
                    <p><strong>Sujet:</strong> %s</p>
                    <p><strong>Message:</strong></p>
                    <p>%s</p>',
                    htmlspecialchars($data['name']),
                    htmlspecialchars($data['email']),
                    htmlspecialchars($data['subject']),
                    nl2br(htmlspecialchars($data['message']))
                ));

            try {
                // Pour le développement, on simule l'envoi
                // $mailer->send($email);
                $this->addFlash('success', 'Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.');
                return $this->redirectToRoute('app_contact');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi du message.');
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
