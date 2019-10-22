$(document).ready(function(){

     var pdTeamArray ={"PD": [
     {  "headshot": "JosephSanfilippo.png", "name": "Joseph Sanfilippo",  "title": "Director of eLearning", "file": "JosephSanfilippo" },
     {  "headshot": "LauraJakubowski.png", "name": "Laura Jakubowski",  "title": "PD Specialist", "file": "LJakubowski" },
     {  "headshot": "MatthewThaxter.png", "name": "Matt Thaxter",  "title": "PD Account Manager and Specialist", "file": "MatthewThaxter" },
     {  "headshot": "PatriciaUmhafer.png", "name": "Patricia Umhafer",  "title": "PD Specialist", "file": "PatriciaUmhafer" },
     {  "headshot": "RobertAbraham.png", "name": "Robert Abraham",  "title": "PD Account Manager and Specialist", "file": "RobertAbraham" },
     {  "headshot": "Robert-WayneHarris.png", "name": "Robert-Wayne Harris",  "title": "Chief Learning Officer", "file": "Robert-WayneHarris" },
     {  "headshot": "TerryVanNoy.png", "name": "Terry VanNoy",  "title": "PD Specialist", "file": "TerryVanNoy" },
     ]};
     var i = 0;

     for(var i in pdTeamArray.PD) {

       $("table#pdTeam").append( "<tr><td style='width:10%;'><img src=\"http://www.teq.com/images/headshots_circles/" + pdTeamArray.PD[i].headshot + "\" /></td><td>" + pdTeamArray.PD[i].name + "</td><td>" + pdTeamArray.PD[i].title + "</td><td><a href=\"../../pd/" + pdTeamArray.PD[i].file + "\"><strong>View Details</strong></a></td></tr>" );

     }
});
