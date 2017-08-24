/*!
 * Bootstrap v4.0.0-alpha Teq Scripts
 */

var teqHome = new URL("http://www-dev.teq.com/wp-content/themes/BootstrapFour/images/");

var imageArray = [];
  imageArray[0] = {
    count: "1",
    src : teqHome + "andrew_grefig.jpg",
    firstName : "Andrew",
    lastName : "Grefig",
    title : "Director of Curriculum and Content",
    video : "Andrew_Grefig_PDBio_2017_Web"
  };
  imageArray[1] = {
    count: "2",
    src : teqHome + "ben_cebulash.jpg",
    firstName : "Ben",
    lastName : "Cebulash",
    title : "PD Specialist",
    video : "Ben_Cebulash_PDBio_2017_Web"
  };
  imageArray[2] = {
    count: "3",
    src : teqHome + "brittany_handler.jpg",
    firstName : "Brittany",
    lastName : "Handler",
    title : "PD and Curriculum Specialist",
    video : "Brittany_Handler_PDBio_2017_Web"
  };
  imageArray[3] = {
    count: "4",
    src : teqHome + "dan_mineo.jpg",
    firstName : "Dan",
    lastName : "Mineo",
    title : "PD Specialist",
    video : "Dan_Mineo_PDBio_2017_Web"
  };
  imageArray[4] = {
    count: "5",
    src : teqHome + "emily_jones.jpg",
    firstName : "Emily",
    lastName : "Jones",
    title : "PD Specialist",
    video : "Emily_Jones_PDBio_2017_Web"
  };
  imageArray[5] = {
    count: "6",
    src : teqHome + "jessica_wenke.jpg",
    firstName : "Jessica",
    lastName : "Wenke",
    title : "PD and Curriculum Specialist",
    video : "Jessica_Wenke_PDBio_2017_Web"
  };
  imageArray[6] = {
    count: "7",
    src : teqHome + "joe_massi.jpg",
    firstName : "Joe",
    lastName : "Masi",
    title : "PD Specialist",
    video : "Joe_Masi_PDBio_2017_Web"
  };
  imageArray[7] = {
    count: "8",
    src : teqHome + "joe_sanfillippo.jpg",
    firstName : "Joe",
    lastName : "Sanfilippo",
    title : "Director of eLearning",
    video : "Joe_Sanfilippo_PDBio_2017_Web"
  };
  imageArray[8] = {
    count: "9",
    src : teqHome + "laura_jakubowski.jpg",
    firstName : "Laura",
    lastName : "Jakubowski",
    title : "PD Specialist",
    video : "Laura_Jakubowski_PDBio_2017_Web"
  };
  imageArray[9] = {
    count: "10",
    src : teqHome + "matt_thaxter.jpg",
    firstName : "Matt",
    lastName : "Thaxter",
    title : "PD Specialist",
    video : "Matthew_Thaxter_PDBio_2017_Web"
  };
  imageArray[10] = {
    count: "11",
    src : teqHome + "robert_abraham.jpg",
    firstName : "Robert",
    lastName : "Abraham",
    title : "PD Specialist",
    video : "Robert_Abraham_PDBio_2017_Web"
  };
  imageArray[11] = {
    count: "12",
    src : teqHome + "terry_vannoy.jpg",
    firstName : "Terry",
    lastName : "VanNoy",
    title : "PD Specialist",
    video : "Terry_VanNoy_PDBio_2017_Web"
  };
  imageArray[12] = {
    count: "13",
    src : teqHome + "thomas_schwartz.jpg",
    firstName : "Thomas",
    lastName : "Schwartz",
    title : "PD Specialist",
    video : "Thomas_Schwartz_PDBio_2017_Web"
  };
  imageArray[13] = {
    count: "14",
    src : teqHome + "una_titus.jpg",
    firstName : "Una",
    lastName : "Titus",
    title : "PD Specialist",
    video : "Una_Titus_PDBio_2017_Web"
  };

   var containner = document.getElementById('pdBioImages');
   var videoContainner = document.getElementById('pdBioVideos');

    for (x = 0; x < imageArray.length; x++) {

      var img = new Image();
        img.src = imageArray[x].src;

      var span = document.createElement('span');
        span.innerHTML = imageArray[x].firstName + '<br />' + imageArray[x].lastName;

      var modal = document.createElement('div')
      var role = document.createAttribute("role");
        role.value = "dialog";
      var aria = document.createAttribute("aria-hidden");
        aria.value = "true"

          modal.className = "modal fade";
          modal.setAttribute("id", imageArray[x].lastName);
          modal.setAttributeNode(role);
          modal.setAttributeNode(aria);
          modal.innerHTML = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 id="bioTitle" class="modal-title">' + imageArray[x].title + '</h5><button type="button" class="close closePauseVideo" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><video id="video-' + imageArray[x].count + '" class="embed-responsive-item video" controls="controls" style="filter: none;"><source src="' + teqHome +  imageArray[x].video + '.mp4' + '" type="video/mp4"></video></div></div>'
          videoContainner.appendChild(modal);

      var link = document.createElement('a');
      var linkTarget = document.createAttribute("data-toggle");
       linkTarget.value = "modal";
       link.className = "col-md-3 col-sm-4 col-xs-6 videoLink";
       link.href = "#" + imageArray[x].lastName;
       link.setAttributeNode(linkTarget);
       link.appendChild(img);
       link.appendChild(span);
       containner.appendChild(link);
     };
