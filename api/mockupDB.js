var express = require('express')
var router = express.Router()
var mockupdata =require('../mockup/db')

  module.exports = router
  router.get('/', ( req,res) => {
    res.json(mockupdata)
  })




