ALTER TABLE `users`
    ADD `phone` text NOT NULL DEFAULT '' AFTER `email`;