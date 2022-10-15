
CREATE TABLE
    `Users`(
        `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `userName` VARCHAR(255) NOT NULL,
        `userEmail` VARCHAR(255) NOT NULL,
        `userPassword` VARCHAR(255) NOT NULL
    );


CREATE TABLE
    `posts`(
        `user_id` INT UNSIGNED NOT NULL,
        `postContent` LONGTEXT NOT NULL,
        `date` DATETIME NOT NULL,
        `postTitle` VARCHAR(255) NOT NULL,
        `post_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
    );
    

ALTER TABLE `posts`
ADD
    CONSTRAINT `posts_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `Users`(`user_id`);