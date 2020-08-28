
## Welcome to the Symfony Developer Coding Test

The coding task is to create simple user interaction forms and displaying the information in data tables in Symfony, in combination with jQuery and AJAX requests.

![developer coding task](https://i.imgur.com/eIKMmms.png)

## Stack

 - Symfony 5.1
 - Twig
 - Doctrine
 - MySQL
 - jQuery
 - Bootstrap
 - Font Awesome

For this project, we have prepared a new Symfony 5.1 instance and added the free Bootstrap Admin Dashboard Template [AdminLTE](https://adminlte.io/). All libraries of the JS/CSS files are prepared and included in the project. Please download the free template to check the forms and the styles.

## Files and Folders

### Templates
In **base.html.twig** you will find all the JS/CSS libraries from the external vendors. This is the main HTML of the project.

    /tetmplates/base.html.twig
 

### Assets
All custom assets (js, css, img) should be saved in:

    /public/assets/app/

## Tasks

### Controllers
Create controllers for the Forms and for the AJAX requests.

###  User Entity
Create a new Entity "User", where you will save all the user data:

 - Name
 - Email
 - Age

### Form Add User
Create a form for adding a new user

![Add user](https://i.imgur.com/fwaxal2.png)

The form should be a bootstrap modal window. When we click on the button "Add User", the for should pop up. The saving operation should be done over AJAX Request and the success message should be transferred by the AJAX response. The final result should look like this image:

![Add user result](https://i.imgur.com/rUAXOVt.png)

### Form Edit User
Create a form for edditing an existing user

![Edit user](https://i.imgur.com/9FjyQdx.png)

The form should be also a bootstrap modal window. When we click on the blue "edit" icon on the right side of each row in the data table, the form should pop up. The saving operation should be done over AJAX Request and the success message should be transferred by the AJAX response. The final result should look like this image:

![Edit user result](https://i.imgur.com/IvPd7io.png)

### Display the results in a data table
For displaying the results, please use [jQuery DataTables](https://datatables.net/). You can find also simple examples in the AdminLTE template. 
Create an AJAX call to deliver the data for the DataTable and display it this way:

![All results](https://i.imgur.com/eIKMmms.png)

## Time frame: 3 hours
As a time frame for solving the task, 3 hours should be enough. It is ok if you need more than 3 hours. Delivering quality rather than quantity is important.

## Good luck!
