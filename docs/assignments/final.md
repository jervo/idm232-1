# IDM232 Final Project

This page describes an assignment for this course. Due dates and submissions are handled through [Drexel Blackboard](https://learn.dcollege.net/).


## Project Description

Students will create a custom web application. The topic will be _an online cookbook_ featuring a library of recipes.

Students will be provided with a library of pre-written recipes in PDF and Spread Sheet formats, as well as a group of images related to each recipe. Each student will create their own branded web application that will display the recipes and provide a user interface for browsing, searching and filtering through all of the available content.

The application must use the following:

- PHP
- MySQL
- HTML
- CSS
- Git

Additional techniques, including, but not limited to the following may be used as needed:

- JavaScript
- CSS pre-processors
- Node.js
- Task runners (Grunt, Gulp, NPM etc.)


## Project Requirements

The following outline lists the requirements for successfully completing the final project.

- [ ] All projects must be programmed from scratch using PHP/MySQL as the primary programming and data manipulation languages. Use of online content management systems (Wordpress, WIX, Squarespace etc.) is completely prohibited.

- [ ] All projects must be self hosted.
- [ ] Most up to date code is stored on github.
- [ ] All data must be stored and served from a MySQL database, running on the live web server.
- [ ] Projects must include **all** of the provided recipes, not a subset, unless told otherwise.
- [ ] All sites must be fully responsive, from a range of small to large (smart phone to desktop monitor).

### **Global (9 points)**

- [] All submitted pages must have zero **errors** or **warnings** when live URL is ran through an HTML Validator. Please use [validator.w3.org](https://validator.w3.org/#validate_by_uri+with_options)
- [] Minimum of 37 unique recipes/entries
- [] Codebase does not contain any debugging logs such as `print_r()` or `var_dump()` in your code.
- [] Every submitted page has a unique document title
- [] favicon is included
- [] Every value coming from a form is sanitized and cleaned using the `sanitize_value()` function from `helper_function.php`

  Example

```
$first_name_value = sanitize_value($_POST['first_name']);
$last_name_value = sanitize_value($_POST['last_name']);
$email_value = sanitize_value($_POST['email']);
$phone_value = sanitize_value($_POST['phone']);
```

### **Extra Credit**

- Bullet list of any additions you made to your final project NOT covered in class.

## Grading Criteria

Your final project represents the culmination of ten weeks. This project will be graded based on the following criteria:

1. Code Quality
   - Is all of your code valid?
   - Did you follow best practices regarding file names, characters, coding styles?
   - Is your code legible and easy to navigate?
   - Does your code use comments?
2. Functionality
   - Everything needs to work (e.g. links, videos, audio, images, rollovers etc.). If it's part of your site it must be working properly.
3. Design
   - Is your site visually pleasing?
   - Is your site responsive?
   - Is your content legible with proper contrast, color scheme, typography etc.?
   - Would you feel comfortable using this project in a job interview as an example of your skills?
4. Technique
   - Is the project built in an optimized fashion? Will future maintenance be minimal?


## Submitting the Assignment

Submit the following items in [Drexel Blackboard](https://learn.dcollege.net/) under **Final Project**:

1. A link to your self hosted website project page. From this page, I can fully engage the project and have access to all supplementary pages and functions. List all pages that are required for this assignment.
2. A link to your GitHub repository containing the code for your final project.
   - A copy of your MySQL database must be included in the repository.

**Late submissions receive zero points.**

## Example Submission

All links should be working valid links. This is just example/dummy content

```
Home Page: {link-to-example}

Github Repo: {link-to-github-project-repo}
Database Export: {link-to-file-in-repo}

Extra Credit
{insert any extra features you added here}
```

```

```
