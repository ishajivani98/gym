# Fitclub_25-07-23
Discover the art of crafting a stunning Fitclub Gym Website Landing Page with this step-by-step tutorial.

<!-- tbldiet -->
CREATE TABLE tbldiet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,
    daily_caloric_intake INT NOT NULL,
    breakfast VARCHAR(255) NOT NULL,
    lunch VARCHAR(255) NOT NULL,
    dinner VARCHAR(255) NOT NULL,
    snacks VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);