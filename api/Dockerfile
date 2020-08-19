FROM node:alpine

WORKDIR /usr/app

COPY package*.json ./

RUN npm install --save-dev nodemon

RUN npm install --save express mysql

COPY . .

EXPOSE 9876

CMD ["npm", "start"]