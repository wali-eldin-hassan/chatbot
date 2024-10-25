
# Weather Chatbot

A simple, interactive chatbot application that provides weather information to users. The bot, built using [BotMan Studio](https://botman.io/), allows users to ask for weather updates and receive real-time information based on their location.

## Project Overview

The Weather Chatbot is designed to:
- Provide current weather updates to users based on location.
- Offer an intuitive chatbot interface for seamless weather inquiries.
- Integrate with a weather API to fetch accurate and timely weather data.

This project was initially developed using Laravel 5.7 and has been upgraded to Laravel 8 to leverage new features, improved performance, and enhanced security.

## Features

- **Real-Time Weather Updates**: Users can request current weather details, including temperature, humidity, and weather conditions.
- **Location-Based Weather**: The bot provides weather data based on user-specified or detected location.
- **Interactive Chat Interface**: Built with BotMan, offering an interactive experience where users can naturally request weather information.
  
## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/wali-eldin-hassan/weather-chatbot.git
   cd weather-chatbot
   ```

2. **Install Dependencies**:
   Install the required packages using Composer:
   ```bash
   composer install
   ```

3. **Configure Environment Variables**:
   Copy `.env.example` to `.env` and update the necessary environment variables, especially the API key for the weather service and database credentials.
   ```bash
   cp .env.example .env
   ```

4. **Run Migrations**:
   Set up the database tables:
   ```bash
   php artisan migrate
   ```

5. **Run the Chatbot**:
   ```bash
   php artisan serve
   ```

6. **Interact with the Bot**:
   Access the bot via the web browser at `http://localhost:8000`.

## Upgrading to Laravel 8 from Laravel 5.7

The project was upgraded from Laravel 5.7 to Laravel 8 to take advantage of newer features and optimizations.

### Benefits of Upgrading to Laravel 8

1. **Improved Performance**: Laravel 8 offers various performance enhancements over 5.7, leading to faster request handling and better application efficiency.
2. **Enhanced Routing**: Laravel 8 introduced improvements in route caching, allowing the chatbot to handle interactions faster and more reliably.
3. **New Model Factory Classes**: Laravel 8 introduced a new way to create model factories, making testing and database seeding for the chatbot more flexible and easier to maintain.
4. **Improved Security**: Laravel 8 provides more secure password hashing algorithms and updates to improve security, which is vital for projects handling real-time data.
5. **Enhanced Queue System**: The upgrade to Laravel 8 brings improvements in handling queued jobs, ensuring better handling of background processes, like retrieving weather data from an API.
6. **Modern PHP Features**: Laravel 8 utilizes PHP 7.3+ features, which makes the codebase cleaner, more efficient, and easier to understand and maintain.

## Built With

- **Laravel 8** - The PHP Framework for Web Artisans
- **BotMan** - The PHP framework for building chatbots
- **Weather API** - Used for fetching current weather data

## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue to improve the project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

This README provides a comprehensive overview, setup instructions, and highlights the advantages of upgrading to Laravel 8. Let me know if you'd like any additional information!
