# Use an official Node.js runtime as a parent image
FROM node:14

# Set the working directory in the container

WORKDIR /usr/src/app
# Bundle app source
COPY ./nodejs/ /usr/src/app

# Expose the port the app runs on
EXPOSE 3000

# Define the command to run the app
CMD ["node", "index.js"]