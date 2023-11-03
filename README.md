# Blog Web Application - New Feature: Individual Blog Post Viewing

This repository documents the expansion of an existing blog web application to incorporate viewing individual blog posts.

**Note:** Sensitive information has been omitted for privacy reasons. You will need to set up your own SQL database with blog content to run the application successfully.

## Overview
This update expands the functionality of an existing blog web application. It allows users to view individual blog posts by their unique IDs.

## New Features
- **Route Expansion:** Added a new route `/blog/{id}` to display a specific blog post based on its ID.
- **Individual Blog Post View:** Created a view that presents the title, content, and creation date of a single blog post. The routing function renders the view by retrieving the corresponding record from the database.

## Updated Homepage
The home page now includes links to specific blog posts. Users can navigate directly to a detailed view of each post from the homepage.

## Database Configuration
To use this application, you'll need to set up your own SQL database with the necessary blog content. Ensure the database includes fields for blog post titles, content, creation date, and unique identifiers for each post.

### Steps to Deploy and Run the Application
1. **Set up the Database:** Create an SQL database and configure it with your blog content. Use the appropriate structure to store blog post details.
2. **Application Configuration:** Update the application configuration to connect to your SQL database. Modify the necessary settings to establish a connection.
3. **Run the Application:** Deploy the application to a server or run it locally to enable the new features and view blog posts individually.

**Note:** As a privacy measure, sensitive information and configuration details have been removed from the provided code. You'll need to fill in your credentials and database details in the appropriate configurations.

## Privacy Disclaimer
For privacy reasons, sensitive information has been redacted. The application requires a personalized setup with your SQL database to function correctly.

## License
This project is released under the MIT License.

Feel free to explore the code and adapt it to suit your specific requirements.
