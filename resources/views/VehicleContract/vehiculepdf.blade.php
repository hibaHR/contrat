<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br />
<center><h2>
    CONTRAT DE LOCATION VEHICULE
</h2></center>
   Contrat n°: <b>{{$contract->id}}</b><br>
    <pre>
      <br>ENTRE le propriétaire  Mr:   <b>{{$contract->reponse1}}</b>
      <br>Adresse: <b>{{$contract->reponse2}}</b>
      <br> Tél:  <b> {{$contract->reponse3}}</b>
      <br>Marque: <b>{{$contract->reponse4}} </b>
      <br>Immatriculation: <b>  {{$contract->reponse5}} </b>
        <br> ET le locataire Mr : <b> {{$contract->reponse6}} </b>
        <br>  Tél<b> {{$contract->reponse7}} </b>
          </pre>
    <br>A été stipulé ce qui suit :
    <pre>
    <br>Le propriétaire s'engage à mettre à la disposition du locataire le véhicule <br>en bonne conditions (freins, pneus, suspension, moteur, châssis), avec le <br>petit matériel nécessaire pour des petites interventions par le chauffeur <br>(jeu de tournevis, jeu de clés, corde de remorquage). 
  </pre>
  <br><b><U> DUREE DU CONTRAT </U> </b>
<pre>
  <br>Durée de la location : <b>{{$contract->reponse8}} </b> à partir du <b>{{$contract->reponse9}}</>
  <br>Le contrat prend fin à la date d'expiration sans préavis écrit.
<br> <br> <br> <br />
<P align="right">Le locataire {{$contract->reponse6}}  <br> Le propriètaire &eacute; {{$contract->reponse1}}</P>
  </body>
</html>