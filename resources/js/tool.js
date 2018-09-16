Nova.booting((Vue, router) => {
    Vue.component('nova-nexmo', require('./components/BalanceCard'))
    router.addRoutes([
        {
            name: 'nova-nexmo-sms',
            path: '/nova-nexmo/history',
            component: require('./components/SmsHistory'),
        },
    ]),
    router.addRoutes([
        {
            name: 'nova-nexmo-send-sms',
            path: '/nova-nexmo/send-sms',
            component: require('./components/SendSms'),
        },
    ])
})
