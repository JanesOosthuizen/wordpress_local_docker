
# UnHerd Local Environment Setup

This guide will help you set up the UnHerd local development environment using Docker.

## Prerequisites

Before starting, ensure the following are installed on your machine:
- [Docker](https://docs.docker.com/get-docker/)

## Installation Steps

### 1. Pull Down the Repository
First, clone the main repository for the UnHerd local environment:
```bash
git clone https://github.com/UnHerd-Technology/unherd_local_env.git
cd unherd_local_env
```

### 2. Ensure Docker is Installed
Make sure Docker is installed on your machine. If not, follow the [Docker installation guide](https://docs.docker.com/get-docker/).

### 3. Clone the UnHerd Website Repository
Clone the UnHerd website repository into the **parent folder** (above the current directory):
```bash
cd ..
git clone https://github.com/UnHerd-Technology/unherd_wordpress.git
```

### 4. (Optional) Clone the Chatbot Repository
If you need the chatbot for development, you can clone the Chatbot repository into the same **parent folder**:
```bash
git clone https://github.com/UnHerd-Technology/coeditor_chatbot.git
```

### 5. Verify Docker-Compose Paths
Ensure that the paths in the \`docker-compose.yml\` file (located in the \`unherd_local_env\` folder) are correct, especially under the **volumes** section for the WordPress image

_Optional: Uncomment and modify this line if using the chatbot_


```yml
volumes:
  - ../unherd_wordpress:/var/www/html
  # - ../wordpress_chatbot_plugin/:/var/www/html/wp-content/plugins/wordpress_chatbot_plugin
```
### 6. Download db files
Download the database sql files from aws and place the sql files in the db container. You will find it in the following bucket.

```
bucket name: unherd-db-resources
bucket url: https://eu-west-2.console.aws.amazon.com/s3/buckets/unherd-db-resources?region=eu-west-2&bucketType=general&tab=objects
```

_If you dont have aws access yet, reach out to Chris or Janes_

### 7. Build and Start Docker Containers
Run Docker Compose to build the images and start the environment:
```bash
docker-compose up --build
```

### 8. Access the MySQL Container
Once the containers are up, you need to log into the MySQL container:
```bash
docker exec -it unherd_local-db-1 bash
```
### 9. Run the Database Import Script
Inside the MySQL container, run the database import script. This process might take some time,
```bash
cd tools
./import-db.sh
```

### 10. Access the Local Site
Once everything is set up, you can access the UnHerd website locally at:
- [https://127.0.0.1:8000/](https://127.0.0.1:8000/)

---

### Connecting to the db from your local machine

You can connect to the database from yoru lcoalhost by using the credentials in the docker-compose file and by setting the host to 127.0.0.1

## Troubleshooting

- You might have to set the siteurl and home values in the database to http:127.0.0.1:8000
- Ensure that Docker is running properly on your machine.
- Double-check the paths in \`docker-compose.yml\` if encountering file mounting issues.
- If there are issues with the database import, ensure you have the correct SQL dump and proper access permissions.

---

## Contributing
Feel free to submit pull requests or suggest improvements to this setup. 
