//Javascript created to carry out filtering on projects by tutor idea the code of the filtering has been taught from-
// https://www.w3schools.com/howto/howto_js_filter_elements.asp, as their is no need to develop a filtering system which has already


//this is used so when each page loads all elements appear on the page before the user start to filter the data
function myFunction(all) {
    //sets the variables
    var x, i;
    // x is used to collect the first class which contains all the element for the individual projects
    x = document.getElementsByClassName("container");
    c = "";
    //loops through each container in the display
    for (i = 0; i < x.length; i++) {
        //remove the show connected to the container in the view to reset the display
        RemoveProjectOrLearningSection(x[i], "show")
        //sets all the containers to be shown by re-adding the show styling to the elements as well calls in a another method
        if (x[i].className.indexOf(c) > -1) AddProjectOrLearningSection(x[i], "show");
    }
}


filterTutor("all");
//filter tutor is the function called when the user click on a button, staff_id is passed to then hide the container which are not owned by the tutor
function filterTutor(staff_id) {
    var x, i;
    //call in the container element and all the class with it
    x = document.getElementsByClassName("container");
    //if the staff id equal all it will set all container to show if not the staff id is set to the id of the student id
    if ( staff_id == "all") staff_id = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        //loops though each and links to remove section of the javascript
        RemoveProjectOrLearningSection(x[i], "show");
        //once show has been removed a new if used to see if the show needs to be re added to the element or not linking to the add javascript function
        if (x[i].className.indexOf(staff_id) > -1) AddProjectOrLearningSection(x[i], "show");
    }
}

// function to add show on to the element
function AddProjectOrLearningSection(element, name) {
    //setting the variable
    var i, arr1, arr2;
    //spliting the class to get each individual class
    arr1 = element.className.split(" ");
    //split the name
    arr2 = name.split(" ");
    //loop through elements
    for (i = 0; i < arr2.length; i++) {
        // if get to negative
        if (arr1.indexOf(arr2[i]) == -1) {
            //add show to it
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function RemoveProjectOrLearningSection(element, name) {
    //set variables
    var i, arr1, arr2;
    //split class
    arr1 = element.className.split(" ");
    //split names
    arr2 = name.split(" ");
    //loop through elements
    for (i = 0; i < arr2.length; i++) {
        //loops through to see where show is
        while (arr1.indexOf(arr2[i]) > -1) {
            //slice where show is
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    //brings elements back together
    element.className = arr1.join(" ");
}
