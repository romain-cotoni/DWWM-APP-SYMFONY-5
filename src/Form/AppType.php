<?php

namespace App\Form;

use App\Entity\Candidat;
use App\Entity\Ccp;
use App\Entity\Competence;
use App\Entity\Habilitation;
use App\Entity\Session;
use App\Entity\Titre;
use App\Repository\CandidatRepository;
use App\Repository\SessionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('identification', TextType::class, [
                'label'    => 'identification candidat',
                'attr'         => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('session', EntityType::class, [                
                'class'        =>  Session::class, 
                'choice_label' => 'identifiant',
                'label'        => 'Session',
                'attr'         => ['style' => 'width: 100%', 'class' => 'form-select'],
                //'required'     => true,
            ])
            ->add('session_changer', SubmitType::class, [
                'label' => 'Associer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',]
            ])
            ->add('add_candidat', SubmitType::class, [
                'label' => 'Créer/Modifier',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_candidat', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])    
            ->add('identifiant', TextType::class, [
                'label'    => 'identification session',
                'attr'     => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('date_debut', DateType::class, [
                'label' => 'Date de début',                
                'required' => false,
                'attr'     => ['style' => 'width: 100%', 'class' => 'form-select',],
                'widget' => 'single_text',
            ])
            ->add('date_fin', DateType::class, [
                'label' => 'Date de fin',                
                'required' => false,
                'attr'     => ['style' => 'width: 100%', 'class' => 'form-select',],
                'widget' => 'single_text',
            ])
            ->add('nombre_de_jours', IntegerType::class, [
                'label' => 'Nombre de jours',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
            ])
            ->add('responsable', TextType::class, [
                'label' => 'Responsable',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('site_de_session', TextType::class, [
                'label' => 'Site de session',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('code_postal', TextType::class, [
                'label' => 'Code postal',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_session', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_session', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])    
            ->add('date_jour', DateType::class, [
                'label' => 'Date de jour',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('commentaire', TextType::class, [
                'label' => 'Commentaire',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('select_description', EntityType::class, [
                'class' => Competence::class,
                'choice_label' => 'description',
                'label'    => 'Selectionner une description',
                /*'required' => true,*/
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
            ])
            ->add('select_commentaire', EntityType::class, [
                'class' => Competence::class,
                'choice_label' => 'commentaire',
                'label'    => 'Selectionner un commentaire',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
            ])      
            ->add('raison_sociale', TextType::class, [
                'label' => 'Raison sociale',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('adresse_entreprise', TextType::class, [
                'label' => 'Adresse entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('code_postal_entreprise', TextType::class, [
                'label' => 'Code postal entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('ville_entreprise', TextType::class, [
                'label' => 'Ville entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('telephone_entreprise', TextType::class, [
                'label' => 'Téléphone entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_entreprise', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_entreprise', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])    
            ->add('nom_responsable_entreprise', TextType::class, [
                'label' => 'Nom responsable entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_responsable_entreprise', TextType::class, [
                'label' => 'Prénom responsable entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('fonction_responsable_entreprise', TextType::class, [
                'label' => 'Fonction responsable entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('tel_fixe_responsable_entreprise', TextType::class, [
                'label' => 'Téléphone fixe responsable entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('tel_mob_responsable_entreprise', TextType::class, [
                'label' => 'Téléphone mobile responsable entreprise',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_responsable', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_responsable', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])    
            ->add('nom_jury_1', TextType::class, [
                'label' => 'Nom jury 1',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_jury_1', TextType::class, [
                'label' => 'Prenom jury 1',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('nom_jury_2', TextType::class, [
                'label' => 'Nom jury 2',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_jury_2', TextType::class, [
                'label' => 'Prenom jury 2',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('nom_jury_3', TextType::class, [
                'label' => 'Nom jury 3',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_jury_3', TextType::class, [
                'label' => 'Prenom jury 3',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])            
            ->add('add_jury', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_jury', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])    
            ->add('insee', TextType::class, [
                'label' => 'Insee',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('nom_utilisateur', TextType::class, [
                'label' => 'Nom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_utilisateur', TextType::class, [
                'label' => 'Prénom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('adresse_utilisateur', TextType::class, [
                'label' => 'Adresse utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('code_postal_utilisateur', TextType::class, [
                'label' => 'Code postal utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('ville_utilisateur', TextType::class, [
                'label' => 'Ville utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('tel_mob_utilisateur', TextType::class, [
                'label' => 'Mobile utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_utilisateur_1', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_utilisateur_1', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('insee2', TextType::class, [
                'label' => 'Insee',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('nom_utilisateur2', TextType::class, [
                'label' => 'Nom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_utilisateur2', TextType::class, [
                'label' => 'Prénom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('adresse_utilisateur2', TextType::class, [
                'label' => 'Adresse utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('code_postal_utilisateur2', TextType::class, [
                'label' => 'Code postal utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('ville_utilisateur2', TextType::class, [
                'label' => 'Ville utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('tel_mob_utilisateur2', TextType::class, [
                'label' => 'Mobile utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_utilisateur_2', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_utilisateur_2', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('insee3', TextType::class, [
                'label' => 'Insee',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('nom_utilisateur3', TextType::class, [
                'label' => 'Nom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('prenom_utilisateur3', TextType::class, [
                'label' => 'Prénom utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('adresse_utilisateur3', TextType::class, [
                'label' => 'Adresse utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('code_postal_utilisateur3', TextType::class, [
                'label' => 'Code postal utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('ville_utilisateur3', TextType::class, [
                'label' => 'Ville utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('tel_mob_utilisateur3', TextType::class, [
                'label' => 'Mobile utilisateur',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_utilisateur_3', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('delete_utilisateur_3', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('select_habilitation', EntityType::class, [
                'class' => Habilitation::class,
                'choice_label' => 'titre_habilitation',
                'label'    => 'Selectionner une habilitation',
                'required' => false,
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
            ])
            ->add('titre_habilitation', TextType::class, [
                'label' => 'Titre habilitation',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('date_debut_habilitation', DateType::class, [
                'label' => 'Date debut habilitation',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('date_fin_habilitation', DateType::class, [
                'label' => 'Date fin habilitation',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
                'widget' => 'single_text',
            ])                        
            ->add('libelle_court', TextType::class, [
                'label' => 'Libellé court',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('libelle_long', TextType::class, [
                'label' => 'Libellé long',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('referentiel_libelle', TextType::class, [
                'label' => 'Référentiel libelle',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('referentiel_document', TextType::class, [
                'label' => 'Référentiel document',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('referentiel_date_debut', TextType::class, [
                'label' => 'Référentiel date début',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('referentiel_date_fin', TextType::class, [
                'label' => 'Référentiel date fin',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_titre', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_titre', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('code_ccp', TextType::class, [
                'label' => 'Code ccp',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('libelle_ccp', TextType::class, [
                'label' => 'libellé ccp',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('select_code_ccp', EntityType::class, [
                'class' => Ccp::class,
                'choice_label' => 'code_ccp',
                'required'     => false,  
                'label'    => 'Selectionner une description',
                'attr'  => ['style' => 'width: 100%', 'class' => 'form-select',],
            ])
            /*->add('select_libelle_ccp', EntityType::class, [
                'class' => Competence::class,
                'choice_label' => 'libelle_ccp',
                'label'    => 'Selectionner un commentaire',                
                'attr'  => ['style' => 'width: 100%',],
            ])*/
            ->add('code_niveau', TextType::class, [
                'label' => 'Code niveau',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('libelle_niveau', TextType::class, [
                'label' => 'Libellé niveau',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_niveau', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_niveau', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('nom_projet', TextType::class, [
                'label' => 'Nom projet',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('commentaires', TextType::class, [
                'label' => 'commentaire',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_projet', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_projet', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->add('nom_produit', TextType::class, [
                'label' => 'Nom produit',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('domaine', TextType::class, [
                'label' => 'Domaine',
                'attr'  => ['style' => 'width: 100%', 'class'=>'form-control'],
                'required' => false,
            ])
            ->add('add_produit', SubmitType::class, [
                'label' => 'Valider',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])            
            ->add('delete_produit', SubmitType::class, [
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])        
            ->add('reset', SubmitType::class, [
                'label' => 'Reset',
                'attr'  => ['class' => 'btn btn-primary',
                            'style' => 'width: 100%',],                
            ])
            ->add('debut_select', DateType::class, [
                'attr'     => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
                'widget'   => 'single_text',
                'label'    => 'Chercher par date',
            ])
            ->add('fin_select', DateType::class, [ 
                'attr'     => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required' => false,
                'widget'   => 'single_text',
            ])
            ->add('titre_select', EntityType::class, [                
                'class'        => Titre::class,
                'choice_label' => 'libelle_court',
                'attr'         => ['style' => 'width: 100%', 'class' => 'form-select',],
                'required'     => true,                
                'label'        => 'Chercher par titre',
            ])
            ->add('btn_date_select', SubmitType::class, [                                
                'attr'     => ['style' => 'width: 100%', 'class' => 'btn btn-primary',],
                'label'    => 'Chercher',
            ])
            ->add('btn_titre_select', SubmitType::class, [ 
                'attr'     => ['style' => 'width: 100%', 'class' => 'btn btn-primary',],              
                'label'    => 'Chercher',
            ]);
            

            /*->add('candidatselect', EntityType::class, [                
                'class'        => Candidat::class,
                'query_builder' => function (CandidatRepository $repo) {
                    return $repo->createQueryBuilder('c')
                        ->orderBy('c.identification', 'ASC');
                },                                    
                'choice_label' => 'identification',
                'label'        => 'select candidat',
                'attr'         => ['style' => 'width: 100%'],
                'required'     => true,
            ])
            ->add('candidatselect', ChoiceType::class, [                
                'label'        => 'select candidat',
                'choices'      => [],
                'compound'     => true,
                'attr'         => ['style' => 'width: 100%'],
                'required'     => true,  
                
                'allow_extra_fields' => true,
            ])        
            ->add('sessionselect', EntityType::class, [                
                'class'        => Session::class,
                'query_builder' => function (SessionRepository $repo) {
                    return $repo->createQueryBuilder('s')
                        ->orderBy('s.identifiant', 'ASC');
                },      
                'choice_label' => 'identifiant',
                'label'        => 'select session',
                'attr'         => ['style' => 'width: 100%'],
                'required'     => true,
            ])
            ->add('select_candidat', SubmitType::class, [
                'label' => 'Chercher Candidat',
                'attr'  => ['class' => 'btn btn-secondary',
                            'style' => 'width: 100%',],                
            ])
            ->addEventListener(
                FormEvents::PRE_SUBMIT,
                function(FormEvent $event){
                    $form = $event->getForm();
                    $data = $event->getData()['candidatselect'];
                    $choices = array();
                    if(is_array($data)){ foreach($data as $choice) { $choices[$choice] = $choice; } }
                    else{$choices[$data] = $data;}
                    $form->add('candidatselect', ChoiceType::class, array('choices'=>$choices));
                }
            )*/;        
            
           
                               
    }

    /*public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
           
        ]);
    }*/

        







}
