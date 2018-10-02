function verif(){
   if (document.F.T0.value=='')  {
       alert("Le champ N client ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T1.value=='')  {
       alert("Le champ N Facture ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T2.value=='')  {
       alert("Le champ Date de Facturation ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T3.value=='')  {
       alert("Le champ Total hors taxes ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T4.value=='')  {
       alert("Le champ TVA ne doit pas étre vide !! ") ;
       return false;
   }

      if (document.F.T5.value=='')  {
       alert("Le champ Redevance Télécom ne doit pas étre vide !! ") ;
       return false;
   }
      if (document.F.T6.value=='')  {
       alert("Le champ Droit de timbre sur consommation ne doit pas étre vide !! ") ;
       return false;
   }
      if (document.F.S1.value=='')  {
       alert("Le champ Numero ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.S2.value=='')  {
       alert("Le champ Montant HT Par ligne ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T7.value=='')  {
       alert("Le champ Montant Total de la facture ne doit pas étre vide !! ") ;
       return false;
   }
   
}