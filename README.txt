PRAJWAL:
Responsive webpage design done. Most of the design issues must be fixed now. If you find any problems, inform me.

TALANK:
test the forgot password while login. 
how to check?

1) signup, provide email address
2) click on forgot password
3) provide your email address
4) now go to phpmyadmin and open user table
5) search your email address, find and copy the associated forgot_pw_token and copy it
6) go to localhost/Canteen/process/reset_password.php?token=forgot_pw_token&&email=your_email_address
7) provide new password
8) now login with new password