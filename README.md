# LabActivity10-Cortez — Barangay Bulletin – Purok Cortez

Laravel 12 + Eloquent + SQLite + Blade/Tailwind (v3 via Vite).

- **Per page:** 6 — "Cortez" has 6 letters (the minimum is 6).
- **Custom category:** Livelihood (alongside Announcement, Health, Peace & Order, Ayuda).
- **Birthday post:** "Purok Cortez Clean-up Drive", pinned, published 2026-01-01 (TODO: set my birthday).
- **Author:** Kagawad Jez Cortez — kagawad.cortez@bulletin.test

## Run
```
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
npm install
npm run dev          # terminal 1
php artisan serve    # terminal 2
```
Expected after seeding: 5 authors, 51 posts (40 published, 10 drafts + 1 pinned).
