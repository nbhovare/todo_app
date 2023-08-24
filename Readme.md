# Todo App

This is a simple Todo app that allows users to create and delete tasks. It uses PHP for the backend, HTML for the user interface, and MySQL for storing tasks.

## Functionality

- Add new tasks to the list.
- Delete existing tasks.
- Tasks are stored in a MySQL database.

## Directory Structure

- **src/**
  - **index.php**: The main entry point of the Todo app.
  - **styles.css**: Stylesheet for the app's user interface.
  - **add_todo.php**: Handles adding new tasks to the database.
  - **delete_todo.php**: Handles deleting tasks from the database.
  - **images/**: Folder to store images used in the app.
- **docker-compose.yml**: Defines the Docker services and containers for the app, MySQL server, and phpMyAdmin.
- **Dockerfile**: Instructions to build the application Docker image.

## Containers

The app runs in three separate Docker containers:

1. **App Container**: This container runs the PHP application that serves the Todo app. It communicates with the MySQL database container.
2. **MySQL Server Container**: This container hosts the MySQL database where task data is stored. The app container communicates with this container for data storage and retrieval.
3. **phpMyAdmin Container**: This container provides a web-based interface (phpMyAdmin) to manage the MySQL database. It's useful for debugging and managing the database during development.

## Data Persistence

Data persistence is ensured using Docker volumes:

- The `mysql_data` named volume is used to store MySQL data. This allows the database to retain data even if containers are removed.

## Database Information

The app uses the following database and table:

- **Database Name**: todos
- **Table Name**: tasks
- **Table Fields**:
  1. **ID**: Primary key
  2. **task_name**: Task description

## Docker Compose

The `docker-compose.yml` file describes the services that make up the app:

- `app` service: Builds the app container using the `Dockerfile`, exposing it on port 80.
- `dbmysql` service: Sets up the MySQL server container and uses the `mysql_data` volume for data persistence.
- `phpmyadmin` service: Sets up the phpMyAdmin container for database management.

To start the containers, run `docker-compose up` in your terminal.

## Dockerfile

The `Dockerfile` contains instructions for building the application image. It starts from a base image, copies the app files into the image, and configures the web server to serve the app.

## Usage

1. Make sure you have Docker and Docker Compose installed.
2. Clone this repository.
3. Navigate to the project directory.
4. Run `docker-compose up` to start the containers.
5. Access the Todo app in your browser at `http://localhost:8080`.
6. Access phpMyAdmin at `http://localhost:8081` for database management.

## Notes

- The app uses MySQL for data storage. You can find database configuration in `docker-compose.yml` file.
- The app container is built from the `Dockerfile` in the project directory.

Feel free to customize, modify, and enhance the app according to your needs!

