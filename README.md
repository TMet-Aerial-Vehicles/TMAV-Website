[![Netlify Status](https://api.netlify.com/api/v1/badges/067725da-317a-41fc-a29f-aae5415481ce/deploy-status)](https://app.netlify.com/sites/tmav/deploys)

# TMAV-Website

[TMAV Website](https://tmav.netlify.app)

## Build

The website is developing in PHP, and then built into HTML files for static hosting.

The PHP files are stored within the /views folder. For development, the PHP can be run locally using: 

```php -S localhost:8000```

It will use the index.php file for routing. Netlify HTML routing is done through the _redirects file.

For building to HTML files:

```./build.sh```

The build script will build and move all files to the /public_html folder

## Deployment

Committing to `master` will automatically trigger the Netlify production build and will deploy the site to [https://tmav.netlify.app](https://tmav.netlify.app) 
