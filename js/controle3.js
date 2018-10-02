function verif(){

    if (document.F.T1.value=='')  {
       alert("Le champ NUM ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.D1.value=='')  {
       alert("Le champ Période DU ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.D2.value=='')  {
       alert("Le champ Période AU ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T2.value=='')  {
       alert("Le champ Date ne doit pas étre vide !! ") ;
       return false;
   }

      if (document.F.S1.value=='')  {
       alert("Le champ Numero Poste ne doit pas étre vide !! ") ;
       return false;
   }
      if (document.F.S2.value=='')  {
       alert("Le champ Montant HT Par ligne ne doit pas étre vide !! ") ;
       return false;
   }
      if (document.F.T3.value=='')  {
       alert("Le champ Total HT ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T4.value=='')  {
       alert("Le champ TVA ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T5.value=='')  {
       alert("Le champ Timbre ne doit pas étre vide !! ") ;
       return false;
   }
    if (document.F.T6.value=='')  {
       alert("Le champ Montant Total de la facture ne doit pas étre vide !! ") ;
       return false;
   }


}