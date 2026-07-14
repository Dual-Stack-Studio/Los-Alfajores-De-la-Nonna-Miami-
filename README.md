# El Dulce de la Nonna

> Live client website for an artisan alfajores bakery in Miami, FL. Custom-order workflow with 48-hour advance validation, dual-email confirmation, and allergen disclosure — built on Laravel 13 with Blade + Tailwind CSS v4.

**Real client project · Live at [losalfajoresdelanona.com](https://losalfajoresdelanona.com) · Built under [Dual-Stack Studio](https://github.com/Dual-Stack-Studio)**

---

## Screenshots

<div align="center">

| Home | Gallery | Order Form |
|------|---------|------------|
| <img src="los-alfajores-de-la-nonna/docs/screenshots/home.png" width="280"/> | <img src="los-alfajores-de-la-nonna/docs/screenshots/gallery.png" width="280"/> | <img src="los-alfajores-de-la-nonna/docs/screenshots/order-form.png" width="280"/> |

| About | Allergens + Payment Terms |
|-------|--------------------------|
| <img src="los-alfajores-de-la-nonna/docs/screenshots/sobre-mi.png" width="280"/> | <img src="los-alfajores-de-la-nonna/docs/screenshots/allergens.png" width="280"/> |

</div>

**Live:** [losalfajoresdelanona.com](https://losalfajoresdelanona.com) · [Order form](https://losalfajoresdelanona.com/encargar) · [About](https://losalfajoresdelanona.com/sobre-mi)

---

## Overview

El Dulce de la Nonna is a live client website for an artisan alfajores bakery based in Miami, Florida. The site handles the full custom-order lifecycle: a customer fills out an order form, a 48-hour advance notice rule is enforced server-side, and two emails fire simultaneously — one notifying the owner of a new order, and one sending the customer a confirmation with payment and cancellation terms.

The site is built around a specific emotional hook: **Argentine expats in Miami** who grew up eating alfajores and miss the taste of the ones their grandmothers used to make. That nostalgia — for home, for family, for a flavor that takes you back — is baked into the copy, the tone, and the product itself. Every order is handmade to order, the same way a nonna would have made them.

No database is needed for orders. The owner receives structured order details by email and coordinates payment and delivery directly. This keeps the architecture minimal, maintenance-free, and cost-zero to operate.

---

## Features

- **Order form** — nombre, email, teléfono, dirección, fecha deseada, detalle del pedido
- **48-hour advance validation** — Carbon enforces minimum 2-day lead time server-side; requests submitted too close are rejected with Spanish-language error messages
- **Dual email on submit** — owner receives full order details; customer receives acknowledgment with payment and cancellation terms
- **Allergen disclosure** — prominently lists GLUTEN, LACTEOS, HUEVO, COCO + frutos secos environment
- **WhatsApp chat button** — one-tap contact for mobile users
- **Server-rendered** — no JavaScript framework; pure Blade templates with Tailwind CSS v4 and Vite
- **Responsive** — mobile-first layout, tested on mobile and desktop
- **Privacy policy page** — dedicated `/privacidad` route with full data-use disclosure
- **Explicit consent on order form** — checkbox requiring acceptance of the Privacy Policy before submission; data-use scope is stated inline ("used solely to process your order")

---

## Legal & Compliance

The site is built with consumer protection requirements applicable to small businesses operating in Florida:

- **Florida Digital Bill of Rights (FDBR)** — personal data collected through the order form (name, email, phone, address) is used exclusively to fulfill orders; no data is sold or shared with third parties
- **Allergen disclosure** — Florida food safety regulations require clear allergen labeling for home-based food businesses; the order form includes a prominent allergen notice covering GLUTEN, LÁCTEOS, HUEVO, COCO, and a frutos secos cross-contact warning
- **Cancellation & payment policy** — cancellation window (24h) and payment terms are disclosed on the order form before submission, in compliance with Florida's Deceptive and Unfair Trade Practices Act (FDUTPA)
- **Privacy Policy page** — available at `/privacidad`; outlines what data is collected, how it is used, and the customer's rights

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 13 |
| Language | PHP 8.3+ |
| Templating | Blade (server-rendered) |
| Styling | Tailwind CSS v4 + Vite |
| Email | Laravel Mail (Mailables) |
| Validation | Laravel Form Validation |
| Date logic | Carbon (48h advance check) |
| Testing | PHPUnit 12 |

---

## Architecture

\`\`\`
Browser
  │
  │  GET /           → welcome.blade.php   (hero + products)
  │  GET /encargar   → EncargoController@create  (order form)
  │  POST /encargar  → EncargoController@store
  │                     ├─ Validate: nombre, email, teléfono, dirección, fecha, detalle
  │                     ├─ Carbon: fecha >= today + 48h  →  reject if too soon
  │                     ├─ Mail::to(owner)  → NuevoEncargoMail
  │                     └─ Mail::to(client) → ConfirmacionEncargoClienteMail
  │  GET /sobre-mi   → PageController@sobreMi   (baker bio + photo)
  └─ GET /privacidad → PageController@privacidad (privacy policy)
\`\`\`

---

## Order Flow

1. Customer visits /encargar and submits the form
2. Laravel validates all fields server-side with Spanish-language messages
3. Carbon checks the requested date is at least 48 hours in the future
4. NuevoEncargoMail fires to the owner address with full order details
5. ConfirmacionEncargoClienteMail fires to the customer email with acknowledgment and terms
6. Customer is redirected to a thank-you confirmation

---

## Email Classes

| Class | Recipient | Subject |
|-------|-----------|---------|
| NuevoEncargoMail | Owner (config mail.to_address) | Nuevo pedido - El Dulce de la Nona |
| ConfirmacionEncargoClienteMail | Customer (submitted email) | Hemos recibido tu pedido - El Dulce de la Nona |

---

## Routes

| Method | URI | Handler | Description |
|--------|-----|---------|-------------|
| GET | / | Closure | Homepage (product showcase) |
| GET | /encargar | EncargoController@create | Order form |
| POST | /encargar | EncargoController@store | Submit + validate + send emails |
| GET | /sobre-mi | PageController@sobreMi | About page |
| GET | /privacidad | PageController@privacidad | Privacy policy |

---

## Setup

**Prerequisites:** PHP 8.3+, Composer, Node.js 20+

\`\`\`bash
git clone https://github.com/Dual-Stack-Studio/Los-Alfajores-De-la-Nonna-Miami-.git
cd Los-Alfajores-De-la-Nonna-Miami-/los-alfajores-de-la-nonna
composer run setup
\`\`\`

### Environment

\`\`\`env
APP_NAME="El Dulce de la Nonna"
APP_ENV=production
APP_URL=https://losalfajoresdelanona.com

MAIL_MAILER=smtp
MAIL_HOST=smtp.yourprovider.com
MAIL_PORT=587
MAIL_USERNAME=pedidos@losalfajoresdelanona.com
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=pedidos@losalfajoresdelanona.com
MAIL_FROM_NAME="El Dulce de la Nonna"
MAIL_TO_ADDRESS=pedidos@losalfajoresdelanona.com
\`\`\`

For local development, swap MAIL_MAILER=log to see emails in storage/logs/laravel.log.

---

## Testing

\`\`\`bash
cd los-alfajores-de-la-nonna
composer run test
\`\`\`

---

## Business Details

| | |
|--|--|
| Location | Miami, Florida |
| Product | Artisan alfajores - $15.00 / docena |
| Contact | pedidos@losalfajoresdelanona.com · +1 (754) 275-0615 |
| Order window | 48-hour advance notice required |
| Cancellation | Up to 24 hours before delivery |
| Payment | Coordinated on confirmation (no online payment processing) |
| Allergens | GLUTEN · LACTEOS · HUEVO · COCO · frutos secos environment |

---

## Project

Real client project built under **[Dual-Stack Studio](https://github.com/Dual-Stack-Studio)** using an adapted Scrum methodology.

Live site: **[losalfajoresdelanona.com](https://losalfajoresdelanona.com)**

© 2025 Dual-Stack Studio — all rights reserved