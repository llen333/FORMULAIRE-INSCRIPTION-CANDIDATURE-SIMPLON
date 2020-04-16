html {
    width: 100%;
    height: auto;
}

body {
    background-color: white;
    width: 100%;
    height:260vh;
    margin: 0;
}

h1 {
    font-size:40px;
}

h2 {
    font-size:28px;
}

h3 {
    font-size: 20px;
    
}



.div_container {
    display: grid;
    grid-template-columns:repeat(48, 1fr);
    grid-auto-rows: minmax(20px, auto);
    text-align: center;
}

.div_navbar {
    grid-column: 1/49;
    grid-row:1/6;
   
}
.div_titre_formation {
    grid-column:1/49;
    grid-row: 2/10;
    background-color: rgb(219, 9, 9);
    color: white;
    box-shadow: 10px 5px 5px gray;
    
}
.div_formulaire {
    grid-column: 4/46;
    grid-row: 12/14;
    background-color:#514D4D;
    color:white;
    box-shadow: 10px 5px 5px black;
}

label {
    padding: 0.7em 0.7em 0.7em 0.7em;
    background: rgb(219, 219, 225);
    font-size: 20px;
    border-radius: 10px 0px 0px 10px;
    border: 1px solid black;
    box-shadow: 10px 5px 5px gray;

}

input {
    border: black;
    padding:O.5em 0.5em 0.5em 0;
    text-align: center;
    background: rgb(235, 235, 240);
    font-size: 20px;
    border-radius: 0px 10px 10px 0px;
    border: 1px solid black;
    box-shadow: 10px 5px 5px gray
}

input:focus {
    outline:0;
}

input:hover {
    background: rgb(190, 190, 198);
}

.champ_nom {
    grid-column: 10/26;
    grid-row:17/20;
    
}
#nom {
    grid-column: 26/42;
    grid-row:17/20;
   

}

.champ_prenom {
    grid-column: 10/26;
    grid-row:22/25;
   
}
#prenom {
    grid-column: 26/42;
    grid-row:22/25;
   

}

.champ_nom_jeune_fille {
    grid-column: 10/26;
    grid-row:27/30;
   
}
#nom_jeune_fille {
    grid-column: 26/42;
    grid-row:27/30;
  

}

.champ_date_de_naissance {
    grid-column: 10/26;
    grid-row:32/35;
 
}
#date_de_naissance {
    grid-column: 26/42;
    grid-row:32/35;
 

}

.champ_nationalite {
    grid-column: 10/26;
    grid-row:37/40;
   
}
#nationalite {
    grid-column: 26/42;
    grid-row:37/40;
  
}

.champ_sexe {
    grid-column: 10/26;
    grid-row:42/45;
   
}
#sexe {
    grid-column: 26/42;
    grid-row:42/45;
   
}

.champ_adresse {
    grid-column: 10/26;
    grid-row:47/50;
    
}
#adresse {
    grid-column: 26/42;
    grid-row:47/50;
  
}

.champ_ligne2 {
    grid-column: 10/26;
    grid-row:52/55;
   
}
#ligne2 {
    grid-column: 26/42;
    grid-row:52/55;
   
}

.champ_ligne {
    grid-column: 10/26;
    grid-row:57/60;
    
}
#ligne {
    grid-column: 26/42;
    grid-row:57/60;
   
}

.champ_pays {
    grid-column: 10/26;
    grid-row:62/65;
 
}
#pays {
    grid-column: 26/42;
    grid-row:62/65;
  
}

.champ_code_postal {
    grid-column: 10/26;
    grid-row:67/70;
    
}
#code_postal {
    grid-column: 26/42;
    grid-row:67/70;
  
}

.champ_ville {
    grid-column: 10/26;
    grid-row:72/75;
  
}
#ville {
    grid-column: 26/42;
    grid-row:72/75;
    
}

.champ_telephone {
    grid-column: 10/26;
    grid-row:77/80;
   
}
#telephone {
    grid-column: 26/42;
    grid-row:77/80;
    
}

.champ_mobile {
    grid-column: 10/26;
    grid-row:82/85;
  
}
#mobile {
    grid-column: 26/42;
    grid-row:82/85;
   
}

.champ_mail {
    grid-column: 10/26;
    grid-row:87/90;
    
}
#mail {
    grid-column: 26/42;
    grid-row:87/90;
   
}

button {
    background: rgb(96, 95, 95);
    grid-column:21/31;
    grid-row: 93/93;
    color: white;
    border-radius: 10px 10px 10px 10px;
    padding: 0.1em auto;
}

button:focus { 
    outline:0 !important; }

button:hover {
    background: red;
    text-decoration: none;
    
}