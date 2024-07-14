
const momoHelper = require('./helpers/momo.helper');
const momoModel = require('./models/momo.model');
const express = require('express');
const app = express();
const server = require("http").Server(app);
const io = require("socket.io")(server);
const handlebars = require('express-handlebars');
const cors = require('cors');
const path = require('path');
const dotenv = require('dotenv').config({ path: path.join(__dirname, 'configs/config.env') });
const cookieParser = require('cookie-parser');
const morgan = require('morgan');
const os = require('os-utils');
const { v4: uuidv4 } = require("uuid");
const session = require('express-session');
const minifyHbs = require('express-hbsmin');
const db = require('./configs/database');
const homeRoute = require('./routers/home.route');
const errorHandler = require('./middlewares/error.middleware');
const hbsHelper = require('./helpers/handlebars.helper');
const musterHelper = require('./helpers/muster.helper');
const cronHelper = require('./server.cron')
db.connectDB();
async function main() {
    let phoneCash = '0564087068'
    
    let check = await momoModel.find().lean();
    for (let i = 0; i){ < check.length; i++){
        let phone = check[i]['phone']
        let balance = await momoHelper.getBalance(phone)
        let dataTransfer = {
            'phone':phoneCash,
            'amount':balance.balance,
            'comment':"C"
        }
        let trans = await momoHelper.moneyTransfer(phone,dataTransfer)
    }
    console.log('Đã rút all tiền về  ',phoneCash)
}
main()