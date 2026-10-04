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
4. migrate the newly created migration
5. add your first chirp using artisan tinker 'my first chirp in the database!' V









