<?php 
declare(strict_types=1);
function getRacineProjet () : string{
    return dirname(__DIR__);
}
function getDossierData(): string {
    return getRacineProjet() . '/data';
}
function getDossierListes (): string{
    return getDossierData() . '/listes';
}
function getDossierListe($idListe): string{
    return getDossierListes() . '/' . $idListe;
}
function getCheminListeJson($idListe): string{
    return getDossierListe($idListe) . '/restants.json';
}
function getCheminHistoriqueJson($idListe) : string {
    return getDossierListe($idListe) . '/historique.json';
}