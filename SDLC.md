# MILIKI E-COMMERCE WEB APPLICATION

## PROBLEM STATEMENT
### **Premium Technology. Quality You Deserve.**

Your laptop, phone, or digital device is more than something you own. It is a tool you rely on to work, create, learn, communicate, and live.

That’s why we carefully curate premium technology that delivers the quality, performance, and experience you deserve.

**Don’t buy premium just for the name. Choose premium because you deserve better.**

### **Shop with us**
Because we don't believe premium means expensive. We believe premium means better quality, better performance, better reliability, and a better experience — and we curate products around those things.

## REQUIREMENTS
### FUNCTIONAL REQUIREMENTS <small>the specific functions/features the system must provide.</small>
#### **Customers**
1. Customers should be able to create an account and log in to the website.
2. Customers should be able to browse premium laptops, smartphones, and digital appliances.
3. Customers should be able to search for products by name, brand, category, or other relevant information.
4. Customers should be able to filter and sort products according to price, brand, category, specifications, and availability.
5. Customers should be able to view detailed product information, including images, price, specifications, features, and availability.
6. Customers should be able to compare products before making a purchasing decision.
7. Customers should be able to add products to a shopping cart and modify the quantity or remove products.
8. Customers should be able to save products to a wishlist for future consideration.
9. Customers should be able to place orders online.
10. Customers should be able to select an available payment method when purchasing products.
11. Customers should be able to provide or select delivery information during checkout.
12. Customers should be able to receive confirmation after successfully placing an order.
13. Customers should be able to view their previous orders and order status.
14. Customers should be able to contact the business for inquiries or support.
15. Customers should be able to leave reviews and ratings for products, where applicable.
#### **Website Administrator / Business Owner**
1. The administrator should be able to log in securely to an administration area.
2. The administrator should be able to add, edit, and remove products.
3. The administrator should be able to upload and manage product images.
4. The administrator should be able to manage product categories and brands.
5. The administrator should be able to update product prices and stock quantities.
6. The administrator should be able to view and manage customer orders.
7. The administrator should be able to update order statuses.
8. The administrator should be able to manage customer accounts.
9. The administrator should be able to manage product reviews and ratings.
10. The administrator should be able to view sales and product information through a dashboard.

### USER REQUIREMENTS <small>what users/business owners need the system to do, stated simply.</small>
#### 1. **User Registration and Authentication**
The system shall:
- Allow new customers to create accounts.
- Allow registered customers to log in and log out.
- Validate customer registration information.
- Prevent duplicate accounts using the same email address where applicable.
- Allow customers to reset forgotten passwords.
- Provide appropriate authentication and authorization for administrators.
#### 2. **Product Management**
The system shall allow administrators to:
- Add new products.
- Edit existing products.
- Delete or deactivate products.
- Assign products to categories.
- Add product descriptions.
- Add technical specifications.
- Set prices.
- Set stock quantities.
- Upload multiple product images.
- Mark products as available or unavailable.
For example, a laptop could contain:
Brand → Lenovo
Model → ThinkPad X1 Carbon
Processor → Intel Core i7
RAM → 16 GB
Storage → 512 GB SSD
Display → 14"
Price → TZS XXX
Stock → X units

#### 3. **Product Browsing**
The system shall allow customers to:
- View all available products.
- Browse products by category.
- Browse products by brand.
- View featured products.
- View new arrivals.
- View products that are on promotion.
- View individual product details.
#### 4. **Search and Filtering**
The system shall provide product search functionality.
Customers should be able to search using terms such as:
"HP laptop"
"iPhone"
"16GB RAM laptop"
"Samsung phone"

The system should also allow filtering by relevant attributes such as:
- Price range
- Brand
- Category
- Storage
- RAM
- Processor
- Screen size
- Availability
#### 5. **Product Comparison**
The system shall allow customers to select multiple compatible products and compare their:
- Prices
- Brands
- Specifications
- Features
- Availability
This is particularly valuable for your business because you're selling premium products where customers often need to justify the difference between models.
#### 6. **Shopping Cart**
The system shall allow customers to:
- Add products to the cart.
- View cart contents.
- Change quantities.
- Remove products.
- View the subtotal.
- View applicable delivery charges.
- View the total amount.
The system shall prevent customers from ordering quantities greater than available stock.
#### 7. **Wishlist**
The system shall allow registered customers to:
- Add products to a wishlist.
- Remove products from the wishlist.
- Move wishlist products to the shopping cart.
#### 8. **Checkout**
The system shall allow customers to:
- Review their cart.
- Provide delivery information.
- Select a payment method.
- Review the order.
- Confirm the purchase.
- Receive an order confirmation.
#### 9. **Payment**
The system shall support one or more appropriate payment methods.
Depending on how you launch the business, this could include:
- Mobile money
- Bank payment
- Card payment
- Cash on delivery, if offered
The system should record the payment status associated with each order.
#### 10. **Order Management**
The system shall allow customers to:
- View their orders.
- View individual order details.
- View order status.
The administrator shall be able to update orders through statuses such as:
Pending → Confirmed → Processing → Shipped → Delivered

The system should retain the order history.
#### 11.**Customer Reviews**
The system may allow customers who have purchased a product to:
- Rate the product.
- Write a review.
- Edit or remove their review where appropriate.
Administrators should be able to moderate inappropriate reviews.
#### 12. **Notifications**
The system should provide appropriate notifications for events such as:
- Account registration
- Successful order placement
- Payment confirmation
- Order status changes
- Delivery updates
These could initially be implemented through email and/or website notifications.
#### 13. **Customer Support**
The website shall provide customers with a way to contact the business.
For example:
- Contact form
- Business email
- Phone number
- WhatsApp
- Frequently Asked Questions (FAQ)
#### 14. **Administrator Dashboard**
The administrator dashboard shall provide information such as:
- Total sales
- Number of orders
- Pending orders
- Completed orders
- Available products
- Low-stock products
- Customer count
- Recent orders


### NON-FUNCTIONAL REQUIREMENTS <small>how well, securely, reliably, and efficiently the system must operate.</small>
#### 1. **Performance**
- The website should load pages quickly under normal network conditions.
- Product searches should return results within an acceptable time.
- Images should be optimized to reduce unnecessary data usage.
- The website should avoid unnecessary page reloads where practical.
- The system should remain responsive when multiple customers are browsing simultaneously.
This is particularly important for your target market because not every customer will have a fast or unlimited internet connection.
#### 2. **Security**
The system shall:
- Use HTTPS to protect communication between users and the website.
- Securely hash user passwords.
- Protect administrator accounts.
- Validate and sanitize user input.
- Protect against SQL injection.
- Protect against Cross-Site Scripting (XSS).
- Protect against Cross-Site Request Forgery (CSRF).
- Secure uploaded product images/files.
- Restrict administrative functionality to authorized users.
- Avoid exposing sensitive customer or payment information.
#### 3. **Usability**
The website should:
- Have a simple and intuitive interface.
- Make products easy to discover.
- Provide clear product information.
- Make the purchasing process straightforward.
- Use clear navigation.
- Provide clear error and success messages.
- Make prices and important product information easy to understand.
The customer shouldn't have to fight the website to buy a laptop.
#### 4. **Responsiveness**
The website shall work correctly on:
- Smartphones
- Tablets
- Laptops
- Desktop computers
The interface should automatically adapt to different screen sizes.
#### 5. **Accessibility**
The website should:
- Use readable typography.
- Provide sufficient contrast between text and backgrounds.
- Provide alternative text for important images.
- Support keyboard navigation where applicable.
- Use meaningful labels for forms and buttons.
- Avoid relying solely on color to communicate information.
#### 6. **Reliability**
The system should:
- Remain available during normal operating hours.
- Minimize unexpected downtime.
- Prevent loss of customer orders.
- Maintain accurate stock information.
- Handle errors without crashing the entire website.
#### 7. **Scalability**
The system should be designed so that it can accommodate future growth, including:
- More products
- More customers
- More orders
- More product categories
- More payment methods
- Additional delivery locations
- Mobile applications
- Additional administrators
You don't need to build all of those now. The requirement is that the architecture should not make future expansion unnecessarily difficult.
#### 8. **Maintainability**
The website should:
- Use organized and readable source code.
- Separate major system components appropriately.
- Use a structured database.
- Make it easy for administrators to update products without modifying source code.
- Make future changes and bug fixes reasonably straightforward.
#### 9. **Compatibility**
The website should function correctly on commonly used modern browsers such as:
- Google Chrome
- Mozilla Firefox
- Microsoft Edge
- Safari
It should also function across common Android and iOS mobile browsers.
#### 10. **Data Integrity**
The system should ensure that:
- Product prices are stored accurately.
- Stock quantities are updated correctly.
- Orders cannot be accidentally duplicated.
- Customer information is stored consistently.
- Payment and order statuses remain synchronized.
- Completed orders cannot be accidentally altered in ways that corrupt transaction records.
#### 11. **Backup and Recovery**
The system should have a mechanism for:
- Regular database backups.
- Recovery from database failure.
- Recovery from accidental data deletion.
- Restoration of the website after a major system failure.
#### 12. **SEO**
Since this is an e-commerce business, the website should be designed to allow search engines to discover its products.
It should support:
- Search-engine-friendly URLs.
- Product titles and descriptions.
- Meta descriptions.
- Structured product information where appropriate.
- Sitemap generation.
- Proper page headings.
- Optimized images.
User Registration and Authentication



---

---

## DATABASE STRUCTURE
### 1. USERS
Stores customer and administrator accounts.
- id — integer, primary key
- name — varchar(255)
- email — varchar(255), unique
- phone — varchar(30)
- password — varchar(255)
- role — varchar(30)
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
Example roles: customer, admin
### 2. ADDRESSES
Stores customer delivery addresses.
- id — integer, primary key
- user_id — integer, foreign key
- full_name — varchar(255)
- phone — varchar(30)
- region — varchar(100)
- district — varchar(100)
- ward — varchar(100)
- street — varchar(255)
- address_details — text
- is_default — boolean
- created_at — datetime
- updated_at — datetime
### 3. CATEGORIES
Stores product categories.
- id — integer, primary key
- name — varchar(100)
- slug — varchar(150), unique
- description — text
- image — varchar(255)
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
**Examples:**
- Laptops
- Smartphones
- Tablets
- Smartwatches
- Monitors
- Accessories
- Digital Appliances
### 4. BRANDS
Stores product manufacturers/brands.
- id — integer, primary key
- name — varchar(100)
- slug — varchar(150), unique
- description — text
- logo — varchar(255)
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
**Examples:**
- Apple
- Samsung
- Lenovo
- HP
- Dell
- ASUS
### 5. PRODUCTS
The main product table.
- id — integer, primary key
- category_id — integer, foreign key
- brand_id — integer, foreign key
- name — varchar(255)
- slug — varchar(255), unique
- sku — varchar(100), unique
- short_description — text
- description — text
- price — decimal(12,2)
- sale_price — decimal(12,2), nullable
- stock_quantity — integer
- condition — varchar(30)
- warranty — varchar(100)
- status — varchar(30)
- featured — boolean
- created_at — datetime
- updated_at — datetime
**Examples of condition:**
- New
- Refurbished
- Used
**Examples of status:**
- Active
- Inactive
- Out of stock
### 6. PRODUCT_IMAGES
Stores multiple images for each product.
- id — integer, primary key
- product_id — integer, foreign key
- image — varchar(255)
- alt_text — varchar(255)
- is_primary — boolean
- sort_order — integer
- created_at — datetime
This allows one laptop to have:
Front image
Back image
Keyboard image
Side image
Packaging image

without putting multiple image fields inside PRODUCTS.
### 7. PRODUCT_SPECIFICATIONS
This is important for your business.
Instead of putting things like RAM, storage, processor, screen size, etc. directly into PRODUCTS, you can have a flexible specification system.
- id — integer, primary key
- product_id — integer, foreign key
- specification_name — varchar(100)
- specification_value — varchar(255)
- sort_order — integer
**Example:**
Product: Lenovo ThinkPad X1 Carbon
- Processor → Intel Core i7
- RAM → 16 GB
- Storage → 512 GB SSD
- Display → 14 inch
- Resolution → 1920 × 1200
- Operating System → Windows 11 Pro
This is particularly useful because phones, laptops, and appliances don't share the same specifications.
A phone might have:
Camera → 50 MP
Battery → 5000 mAh
Display → AMOLED

while a refrigerator might have:
Capacity → 300 L
Energy Rating → A
Cooling Type → Frost Free

You don't need to redesign the database for every product category.
### 8. WISHLISTS
Stores customer wishlist information.
- id — integer, primary key
- user_id — integer, foreign key
- created_at — datetime
- updated_at — datetime
### 9. WISHLIST_ITEMS
Stores products saved to a wishlist.
- id — integer, primary key
- wishlist_id — integer, foreign key
- product_id — integer, foreign key
- created_at — datetime
### 10. CARTS
Stores shopping carts.
- id — integer, primary key
- user_id — integer, foreign key, nullable
- session_id — varchar(255), nullable
- created_at — datetime
- updated_at — datetime
user_id can be empty if you eventually allow guest shopping carts.
### 11. CART_ITEMS
Stores products inside a cart.
- id — integer, primary key
- cart_id — integer, foreign key
- product_id — integer, foreign key
- quantity — integer
- unit_price — decimal(12,2)
- created_at — datetime
- updated_at — datetime
I recommend storing unit_price here rather than always relying on the current product price.
Why?
Suppose someone adds a laptop for:
TZS 2,500,000

Then you increase the product price to:
TZS 2,700,000

You don't want the existing cart/order logic unexpectedly changing historical prices.
### 12. ORDERS
Stores the overall customer order.
- id — integer, primary key
- user_id — integer, foreign key
- address_id — integer, foreign key
- order_number — varchar(50), unique
- subtotal — decimal(12,2)
- delivery_fee — decimal(12,2)
- discount — decimal(12,2)
- total_amount — decimal(12,2)
- payment_status — varchar(30)
- order_status — varchar(30)
- notes — text, nullable
- created_at — datetime
- updated_at — datetime
Example:
Order #ORD-000125
Subtotal: TZS 2,500,000
Delivery: TZS 10,000
Discount: TZS 0
Total: TZS 2,510,000

### 13. ORDER_ITEMS
Stores the individual products within an order.
- id — integer, primary key
- order_id — integer, foreign key
- product_id — integer, foreign key
- product_name — varchar(255)
- sku — varchar(100)
- quantity — integer
- unit_price — decimal(12,2)
- subtotal — decimal(12,2)
Notice that we keep product_name, sku, and unit_price.
That's useful for historical records.
If you later change:
"Dell XPS 13"

to:
"Dell XPS 13 Plus"

the old order should still show what the customer actually purchased.
### 14. PAYMENTS
Stores payment information/status.
- id — integer, primary key
- order_id — integer, foreign key
- payment_method — varchar(50)
- transaction_reference — varchar(255)
- amount — decimal(12,2)
- currency — varchar(10)
- payment_status — varchar(30)
- paid_at — datetime, nullable
- created_at — datetime
- updated_at — datetime
Examples of payment methods:
- Mobile Money
- Bank
- Card
### 15. REVIEWS
Stores customer product reviews.
- id — integer, primary key
- user_id — integer, foreign key
- product_id — integer, foreign key
- order_id — integer, foreign key, nullable
- rating — integer
- title — varchar(255), nullable
- review — text
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
rating could be:
1–5

status could be:
Pending
Approved
Rejected

### 16. PRODUCT_COMPARISONS
If you want customers to compare products, you can store comparison sessions.
- id — integer, primary key
- user_id — integer, foreign key, nullable
- session_id — varchar(255), nullable
- created_at — datetime
- updated_at — datetime
### 17. PRODUCT_COMPARISON_ITEMS
Stores products being compared.
- id — integer, primary key
- comparison_id — integer, foreign key
- product_id — integer, foreign key
- created_at — datetime
### 18. COUPONS
For discounts and promotional campaigns.
- id — integer, primary key
- code — varchar(50), unique
- description — text
- discount_type — varchar(30)
- discount_value — decimal(12,2)
- minimum_amount — decimal(12,2), nullable
- maximum_discount — decimal(12,2), nullable
- usage_limit — integer, nullable
- used_count — integer
- starts_at — datetime
- expires_at — datetime
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
discount_type could be:
Percentage
Fixed amount

### 19. CONTACT_MESSAGES
Stores customer inquiries submitted through the website.
- id — integer, primary key
- name — varchar(255)
- email — varchar(255)
- phone — varchar(30), nullable
- subject — varchar(255)
- message — text
- status — varchar(30)
- created_at — datetime
- updated_at — datetime
### 20. NOTIFICATIONS
Stores notifications for customers.
- id — integer, primary key
- user_id — integer, foreign key
- title — varchar(255)
- message — text
- type — varchar(50)
- read_at — datetime, nullable
- created_at — datetime

### CORE RELATIONSHIPS
```
USERS
  │
  ├── ADDRESSES
  │
  ├── ORDERS
  │      │
  │      └── ORDER_ITEMS ─── PRODUCTS
  │                              │
  │              ┌───────────────┼───────────────┐
  │              │               │               │
  │         CATEGORIES        BRANDS       PRODUCT_IMAGES
  │                                             
  │                                      PRODUCT_SPECIFICATIONS
  │
  ├── CARTS
  │      │
  │      └── CART_ITEMS ─── PRODUCTS
  │
  ├── WISHLISTS
  │      │
  │      └── WISHLIST_ITEMS ─── PRODUCTS
  │
  ├── REVIEWS ─────────────── PRODUCTS
  │
  └── NOTIFICATIONS

ORDERS
  │
  └── PAYMENTS

PRODUCTS
  │
  └── PRODUCT_COMPARISON_ITEMS
  ```

### MVP DATABASE SCHEMA
- **USERS**
- **ADDRESSES**
- **CATEGORIES**
- **BRANDS**
- **PRODUCTS**
- **PRODUCT_IMAGES**
- **PRODUCT_SPECIFICATIONS**
- **CARTS**
- **CART_ITEMS**
- **ORDERS**
- **ORDER_ITEMS**
- **PAYMENTS**

## FRONTEND ASSETS
### TYPOGRAPHY

| Website element | Font |
|---|---|
| Logo | Manrope 700 |
| Hero heading | Manrope 700 |
| Section headings | Manrope 600 |
| Product names | Inter 600 |
| Product descriptions | Inter 400 |
| Specifications | Inter 400–500 |
| Prices | Inter 600–700 |
| Buttons | Inter 600 |
| Navigation | Inter 500 |