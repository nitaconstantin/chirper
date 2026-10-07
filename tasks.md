# **Chirper**



### **Your first route**

1\. create first route V

2\. update the default route('welcome') to home route V

3\. create the new view V

4\. create layout view V

5\. change title of every page V

6\. add style to the project V



### **Deploy your app**

1. Create a new git repository for the project V
2. Upload the project to GitHub.com V



### **What is MVC?**

1. create an empty ChirpController(app\\Http\\Controllers\\ChirpController) V
2. in the ChirpController add an index method and return a view V
3. In the web routes change the default route to points to the newly index method added V
4. add a simple chirps array in that index method and show the chirps V
5. delete the ChirpController, after you've copied the index method, and create a new ChirpController this time to be a --resource controller V



### **Working with the database**

1. create a migration named create\_chirps\_table V
2. add columns for(user\_id, message(255)) V
3. user\_id column must be nuulable, constrained, and cascadeOnDelete V
4. migrate the newly created migration V
5. add your first chirp using artisan tinker 'my first chirp in the database!' V



### **Our first model**

1. create a Chirp model V
2. add $fillable array for your model V
3. create relationship between a user and chirp models V
4. use tinker to show a user of a chirp V
5. in the controller change the hardcoded array of chirps with the newly created Model V
6. change the view to show the newly values from the database(use forelse directive) V
7. add more chirps in your database V



### **Showing the feed**

1. create a component for a chirp V
2. use the default avatars V
3. pass the chirp prop to the component V
4. create a Chirp seeder V



### **Creating and storing Chirps**

1. add a form for creating a chirp V
2. create the store method in your controller V
3. in the method validate the inputs V
4. then create the chirp V
5. redirect to home with a success message V
6. create a web route for your form V
7. verify your backend validation by removing front end validation V
8. show errors on the view V
9. add errors on the form V
10. show the old value of input V
11. customize validation messages V

