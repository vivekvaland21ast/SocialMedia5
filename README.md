# SocialMate

This social media project, built on Laravel 11 and PHP 8.2.12, offers a dynamic platform for users to connect, share, and interact. With a range of features including friend management, post engagement, and customizable profiles, users can tailor their social experience to suit their preferences. From liking and commenting on posts to receiving notifications and organizing content, this project fosters a vibrant online community while providing a seamless user experience.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP 8.2.12
- Composer 2.7.2
- Laravel 11

### Installation

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/vivekvaland21ast/social-media-project.git
   ```

2. Navigate to the project directory:

   ```bash
   cd social-media-project
   ```

3. Install dependencies using Composer:

   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the `DB_DATABASE` field in the `.env` file with your database name.

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your `.env` file with your database credentials and any other necessary configurations.

7. Migrate the database:

   ```bash
   php artisan migrate
   ```

8. Serve the application:

   ```bash
   php artisan serve
   ```

Now you should be able to access the application at [http://127.0.0.1:8000/](http://127.0.0.1:8000/).

### Usage

1. Register an account using the normal registration process or by using a Gmail ID.

2. Log in using your registered email ID and password.

3. Explore the following core functionalities:

## Core Functionalities

### 1. Add/Remove Friend

Users can add or remove friends within the social media platform. This functionality enhances social interaction and network building.

### 2. Like/Unlike Post

Users have the ability to like or unlike posts shared by other users. This feature encourages engagement and interaction among users.

### 3. View Top Profile List

Users can view a list of their top profile within the platform. 

### 4. View Notifications

Users receive notifications when other users like their posts. This feature keeps users informed about interactions and engagements on their content.

### 5. Archive/Unarchive Own Post

Users can archive or unarchive their own posts, allowing them to organize and manage their content.

### 6. Add/Update/Delete Post

Users can create new posts, update existing ones, or delete posts as needed, giving them control over their published content.

### 7. View All User Posts

Users can view posts from all users on the platform, fostering community engagement and interaction.

### 8. Edit Profile

Users can edit their profile information, including profile picture, bio, and other details, allowing them to customize their online presence.

### 9. Logout

Users can log out of their accounts securely, ending their current session on the platform.

### 10. View Total Posts

Users can see the total number of posts they've published on the platform, providing insights into their activity.

### 11. View Total Archives

Users can view the total number of archived posts, helping them manage and organize their content effectively.

### 12. View Total Friends List

Users can see the total number of friends they have on the platform, giving them an overview of their social connections.

### 13. Theme Mode

Users can switch between light and dark themes to customize their viewing experience.

### 14. Received Welcome Mail

Newly registered users receive a welcome email, providing them with information and guidance on using the platform.

### 15. Send Comments

Users can leave comments on posts shared by other users, facilitating discussions and interactions.

### 16. Edit/Delete Comments

Users can edit or delete their own comments on posts, allowing them to manage their contributions to discussions.

### 17. Reply to Comments

Users can reply to comments on posts, enabling threaded conversations and deeper engagement.

### 18. Forgot Password
Users can reset their password if they forget it by providing their email address. A reset password link will be sent to their email.

## Contributing

Contributions are welcome! Feel free to submit bug reports, feature requests, or pull requests to help improve the project.


## Acknowledgments

Special thanks to the Laravel community for providing a robust framework for building web applications.

## Contact

For any inquiries or support, please contact [vivek21.ast@example.com]([vivek21.ast@example.com).

---

Thank you for choosing the Social Media project! We hope you enjoy using it. If you have any questions or need further assistance, don't hesitate to reach out. Happy socializing! 🎉
