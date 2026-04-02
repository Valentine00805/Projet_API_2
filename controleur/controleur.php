<?php
function ajoutInscrit()
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $date_naissance = $_POST["date_naissance"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $ida = $_POST["ida"];
    insertEtu($nom, $prenom, $email, $date_naissance, $adresse, $telephone, $ida) ; //modèle 
}
function getAllMed()
{
    $meds = selectMed() ; //modèle 
    include("vue/medicaments.php") ; //vue
}
function getActi()
{
$activite=selectActivite(); //modèle
include ("vue/activites.php");

}