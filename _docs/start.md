# Getting Started

## System Requirements

-   PHP 8.1+
-   Node 18.12.1+

## Packages Used

-   [CodeIgniter 4.4+](https://codeigniter.com/)
-   [CodeIgniter Shield](https://github.com/codeigniter4/shield)
-   [CodeIgniter Settings](https://github.com/codeigniter4/settings)
-   [ParcelJS](https://parceljs.org/)
-   [htmx](https://htmx.org/)
-   [AlpineJS](https://alpinejs.dev/)
-   [Tailwind](https://tailwindcss.com/)
-   [DaisyUI](https://daisyui.com/)

## Initial Setup

Once the reposoitory has been installed on your local machine you need to get a few things setup:

```cli
composer install  (only needed if you directly downloaded the files)
npm install
php spark migrate --all
php spark db:seed SampleDataSeeder  (only if you want sample forums, users, etc created)
```

## Frontend Development

We use [ParcelJS]() to handle compiling the frontend assets, including SASS and Javascript. When working on frontend code, ensure you have parcel running:

```cli
npm run dev
```