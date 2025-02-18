# IDM232: Scripting for Interactive Digital Media II

All assignments are outlined and should be submitted on [Drexel Blackboard](https://learn.dcollege.net). Students are encouraged to use [Github Issues](https://help.github.com/articles/about-issues/) throughout the term when assistance is needed. More helpful links are included on the [resources](docs/resources.md) page.

## Github Username Help:

- [@mrpaulphan](https://github.com/mrpaulphan)
- [@philsinatra](https://github.com/philsinatra)
- [@jervo](https://github.com/jervo)
- [@findes](https://github.com/findes)

## Links

- Schedule a meeting: [calendar](https://calendly.com/mr-paulphan)
- Email: [paul.phan@drexel.edu](mailto:paul.phan@drexel.edu)

## Getting Started

- Download the repo and point your server to the `idm232/public_html` folder.
- copy the`env.example.php`file and rename it `env.php`
- Fill out the `env.php` with your information for your current environment.
  - This will different locally vs on production.
- Make sure PHP errors are displaying. Instructions on how to enable them are [here](https://github.com/mrpaulphan/idm232/blob/master/docs/display_errors.md)

## Deploying to Bluehost via FTP

- Export and create a backup of your production database
- Export your local database and import it to your production DB
  - This is optional. Be cautious when doing this. You can lose everything.
- Upload everything but your `env.php` to your server.
  - Your `env.php` should be filled out once on the initial setup and not have to touch this again.
- Clear your cache
