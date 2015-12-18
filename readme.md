#Project 4

###Overview
This application is intended to be a highly useful tool for those who wish to plan and produce their own mead (also known as the Nectar of the Gods), as well as share recipes and perhaps other artistic creations related to mead or norse mythology.

The application will be used to perform tasks that are generally done in personal notes such as choosing a recipe to use, keeping notes on the addition of ingredients during the fermentation process, etc. This will help the mead-maker more accurately manage their batches and help relieve some of the mental burden of keeping track of so many details.

Kvasir’s Wisdom also provides historical records of completed batches of mead, including notes about how they tasted, what challenges might have been faced, dates of production, etc. This is all very useful and relevant information for someone making mead.

###Live URL
The live Project one can be found here:
[Live Project 4](http://p4.benorman.com)

The video presentation for this project can be found here:
[Project 4 Video](https://youtu.be/1UPW5NnSioI)

###Instructions
When first visiting the site, it is recommended to create an account via the 'Login/Register' button in the navigation bar. After registering and logging in, a user can create recipes and batches.

To view all recipes in the database: click the 'All Recipes' button.
To view all batches in the database: click the 'All Batches' button
To view only the users recipes or batches: click the 'My Recipes' or 'My Batches' buttons
To create a new batch directly from a specific recipe page, simply click the 'Create a batch with this recipe!' button below the recipe text. This will send the user to the 'Create Batch' page and automatically use that same recipe in the batch form.

To create a recipe or batch: go to either the 'All Recipes/Batches' or 'My Recipes/Batches', and click the link at the top of the list of recipes/batches to create a new one. You will then be redirected to the main recipe or batch listing, and can view your newly created recipe or batch!

To edit or delete a batch or recipe, simply go to the page for that batch/recipe, and use the links below the text to perform each action. Deletion requires a confirmation, and both edit and deletion actions require the recipe to belong to the logged in user. If the user does not own the recipe, they will not be allowed to manipulate it.

###Other Details
The project utilizes many of the baked in features of Laravel. This includes the blade templating language, master view functionality, user authentication, route restriction via middleware, and others.

###Plugins and Libraries
The only external library used in the development of this web application is the standard Bootstrap library. I made use of several bootstrap elements including the nav-bar, buttons, text fields, and more.