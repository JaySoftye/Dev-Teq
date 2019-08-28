/*!
 * Bootstrap v4.0.0-alpha Teq Scripts
 */

var teqHome = new URL("https://www.teq.com/wp-content/themes/BootstrapFour/images/");

var imageArray = [];
  imageArray[0] = {
    count: "1",
    src : teqHome + "joe_sanfillippo.jpg",
    firstName : "Joe",
    lastName : "Sanfilippo",
    title : "Director of eLearning",
    video : "Joe_Sanfilippo_PDBio_2017_Web"
  };
  imageArray[1] = {
    count: "2",
    src : teqHome + "laura_jakubowski.jpg",
    firstName : "Laura",
    lastName : "Jakubowski",
    title : "PD Specialist",
    video : "Laura_Jakubowski_PDBio_2017_Web"
  };
  imageArray[2] = {
    count: "3",
    src : teqHome + "matt_thaxter.jpg",
    firstName : "Matt",
    lastName : "Thaxter",
    title : "PD Specialist",
    video : "Matthew_Thaxter_PDBio_2017_Web"
  };
  imageArray[3] = {
    count: "4",
    src : teqHome + "patricia_umhafer.jpg",
    firstName : "Patricia",
    lastName : "Umhafer",
    title : "PD Specialist",
    video : "Patricia_Umhafer_PDBio_2017_Web"
  };
  imageArray[4] = {
    count: "5",
    src : teqHome + "robert_abraham.jpg",
    firstName : "Robert",
    lastName : "Abraham",
    title : "PD Specialist",
    video : "Robert_Abraham_PDBio_2017_Web"
  };
  imageArray[5] = {
    count: "6",
    src : teqHome + "terry_vannoy.jpg",
    firstName : "Terry",
    lastName : "VanNoy",
    title : "PD Specialist",
    video : "Terry_VanNoy_PDBio_2017_Web"
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
