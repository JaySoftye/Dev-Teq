$(document).ready(function(){

     var pdTeamArray ={"PD": [
       {  "headshot": "AdamHerman.png", "name": "Adam Herman",  "title": "PD Specialist", "file": "Adam-Herman" },
       {  "headshot": "BenjaminCebulash.png", "name": "Benjamin Cebulash",  "title": "PD Specialist", "file": "bencebulash" },
       {  "headshot": "CaylieLehrer.png", "name": "Caylie Lehrer",  "title": "Curriculum Specialist", "file": "CaylieLehrer" },
       {  "headshot": "ChristineBell.png", "name": "Christine Bell",  "title": "Curriculum Specialist ", "file": "ChristineBell" },
       {  "headshot": "DiomedesGonzalez.png", "name": "Diomedes Gonzalez Jr.",  "title": "PD Specialist", "file": "Diomedes-Gonzalez" },
       {  "headshot": "EmmaFoley.png", "name": "Emma Foley",  "title": "Curriculum Specialist", "file": "EmmaFoley" },
       {  "headshot": "GregDaSilva.png", "name": "Greg DaSilva",  "title": "PD Specialist", "file": "Greg-DaSilva" },
       {  "headshot": "JasmineRivera.png", "name": "Jasmine Rivera",  "title": "PD Specialist", "file": "Jasmine-Rivera" },
       {  "headshot": "JosephQuadrino.png", "name": "Joseph Quadrino",  "title": "Curriculum Specialist", "file": "JosephQuadrino" },
       {  "headshot": "JosephSanfilippo.png", "name": "Joseph Sanfilippo",  "title": "Director of eLearning", "file": "JosephSanfilippo" },
       {  "headshot": "LauraJakubowski.png", "name": "Laura Jakubowski",  "title": "PD Specialist", "file": "LJakubowski" },
       {  "headshot": "MatthewThaxter.png", "name": "Matt Thaxter",  "title": "PD Account Manager and Specialist", "file": "MatthewThaxter" },
       {  "headshot": "MichelleHollander.png", "name": "Michelle Hollander",  "title": "Director of Content and Curriculum", "file": "MichelleHollander" },
       {  "headshot": "NicoleRave.png", "name": "Nicole Rave",  "title": "Curriculum Specialist", "file": "NicoleRave" },
       {  "headshot": "PatriciaUmhafer.png", "name": "Patricia Umhafer",  "title": "PD Specialist", "file": "PatriciaUmhafer" },
       {  "headshot": "RobertAbraham.png", "name": "Robert Abraham",  "title": "PD Account Manager and Specialist", "file": "RobertAbraham" },
       {  "headshot": "Robert-WayneHarris.png", "name": "Robert-Wayne Harris",  "title": "Chief Learning Officer", "file": "Robert-WayneHarris" },
       {  "headshot": "SkylaLilly.png", "name": "Skyla Lilly",  "title": "PD Specialist", "file": "Skyla-Lilly" },
       {  "headshot": "TerryVanNoy.png", "name": "Terry VanNoy",  "title": "PD Specialist", "file": "TerryVanNoy" },
     ]};
     var i = 0;

     for(var i in pdTeamArray.PD) {

       $("table#pdTeam").append( "<tr><td style='width:10%;'><img src=\"http://www.teq.com/images/headshots_circles/" + pdTeamArray.PD[i].headshot + "\" /></td><td>" + pdTeamArray.PD[i].name + "</td><td>" + pdTeamArray.PD[i].title + "</td><td><a href=\"../../pd/" + pdTeamArray.PD[i].file + "\"><strong>View Details</strong></a></td></tr>" );

     }
});
