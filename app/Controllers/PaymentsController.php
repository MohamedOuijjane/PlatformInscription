<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use App\Models\UserModel;

class PaymentsController extends BaseController
{
    public function index()
    {
        // Créer une instance du modèle PaymentModel
        $paymentModel = new PaymentModel();
        
        
        // Récupérer les paiements en attente
        $data['payments'] = $paymentModel->where('status', 'pending')->findAll();
        
        // Charger la vue et passer les données des paiements
        return view('dashbord/confirmation_paiement', $data);
    }

    public function confirm($id)
    {
        // Créer une instance du modèle PaymentModel
        $paymentModel = new PaymentModel();
        
        
        // Mettre à jour le statut du paiement à "paid"
        $paymentModel->update($id, ['status' => 'paid']);
        
        // Rediriger avec un message de succès
        return redirect()->to('/dashbord/confirmation_paiement')->with('success', 'Paiement confirmé avec succès.');
    }

    public function refuse($id)
    {
        // Créer une instance du modèle PaymentModel
        $paymentModel = new PaymentModel();
        
        // Mettre à jour le statut du paiement à "unpaid"
        $paymentModel->update($id, ['status' => 'unpaid']);
        
        // Rediriger avec un message de succès
        return redirect()->to('/dashbord/confirmation_paiement')->with('error', 'Paiement refusé avec succès.');
    }
}
