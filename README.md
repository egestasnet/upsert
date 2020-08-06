# upsert
This is an extension of the `class.db.php` library.

[https://github.com/bennettstone/simple-mysqli](https://github.com/bennettstone/simple-mysqli)

Download the file and add it to this project.

To use the `upsert_class.php` file, open the `class.db.php` file and change `private $link = null;` to `protected $link = null;`.

#What does it?

It is based on the MySQL function :

`INSERT ON DUPLICATE KEY UPDATE`

[https://www.mysqltutorial.org/mysql-insert-or-update-on-duplicate-key-update/](https://www.mysqltutorial.org/mysql-insert-or-update-on-duplicate-key-update/)

## Use

To use it, create the `students` table (see the `upsert_students.sql` file) in the database of your choice.

The `class.db.php` file has the connection variables included.

I use a separate config file, so you need to remove the config vars from the file.

Open the `config.php` file and edit the connection variables.

Put the directory on your webserver.

Open file `upsert_form.php` in the browser to add the students in file `upsert_students.php` to the database.

[http://localhost/upsert_form.php](http://localhost/upsert_form.php)

Open the `upsert_students.php` file in a editor and add this line to the `$insert` array.

```
[1, 'Charlie A', 'Two', 65, 66, 65],
```

Then open file `upsert_form.php` in the browser again.

The new student is added to the database.

You can use `upsert_form.php` as much as you like.

Unless new students are added to the `upsert_students.php` file, nothing will change.

That's it sofar.

It's up to you the create forms to add, edit of delete a student record.

Either with the functions in `class.db.php` or in `upsert_class.php`.
