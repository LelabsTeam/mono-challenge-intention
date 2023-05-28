FROM node:14-alpine

WORKDIR /var/www/product

COPY ./package*.json ./

RUN npm install \
    npm i -g @nestjs/cli 

COPY . .

EXPOSE 3000

CMD [ "npm", "run", "start:dev" ]