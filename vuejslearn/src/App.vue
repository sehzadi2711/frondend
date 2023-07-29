<template>
<img alt="Vue logo" src="./assets/logo.png"><br />

<router-view>
</router-view>
<!--
<router-link to="/">Home</router-link> <br />
<router-link to="/login">Login</router-link> <br />
<router-link to="/profile/rinkal">Rinkal's Profile</router-link> <br />
<router-link to="/profile/yash">yash's Profile</router-link> <br />
<router-link to="/profile/bhavin">Bhavin's Profile</router-link> <br />
<h1>How to pass data child component</h1>
<Child name="Rinkal jain" :user="user" :getData="getData" />
<h1>How to Reuse component</h1>
<ul>
    <li v-for="item in users" :key="item.name" >
        <User :data="item" :getcompo="getcompo" />
    </li>
</ul>
<HtmlBind />

<Student :name="name" />
<Teacher name="teacher" :getUsername="getUsername" />
{{childUser}}
<Form />
<FormModifier />
<ComputedProp />
<Watchers />
<Slots><a href="#">image</a> </Slots>
<Slots><img src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/" /> </Slots>
<Slots>
    <h1>RInkal Jain</h1>
</Slots>
<Slots>
    <template v-slot:header >
        <h1>Rinkal bhavin </h1>
    </template>
    <template v-slot:main>
        <p>Rinkal bhavin </p>
    </template>
    <template v-slot:footer>
        <button>click me </button>
    </template>

</Slots>
<h1>Dynamic Component </h1>

        <button @click="tab='Java'">Java </button>
        <button @click="tab='Php'">Php </button>
        <button @click="tab='Node'">Node </button>
<component :is="tab" />

<teleport to="#footer">
<Footer />
</teleport>
<LifeCycle />

-->

</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Home from './components/Home.vue'
import Home1 from './components/Home1.vue'
import TwoWayBind from './components/TwoWayBind.vue'
import IfElse from './components/IfElse.vue'
import Child from './components/Child.vue'
import User from './components/User.vue'
import HtmlBind from './components/HtmlBind.vue'
import Student from './components/Props/Student.vue'
import Teacher from './components/Props/Teacher.vue'
import Form from './components/Form.vue'
import FormModifier from './components/FormModifier.vue'
import ComputedProp from './components/ComputedProp.vue'
import Watchers from './components/Watchers.vue'
import Slots from './components/Slots.vue'

// Dynamic Components

// import Java from './components/DynamicComponents/Java.vue'
// import Php from './components/DynamicComponents/Php.vue'
// import Node from './components/DynamicComponents/Node.vue'

// TelePort Component 
// import Footer from './components/Footer.vue'

//Life Cycle Methods
// import LifeCycle from './components/LifeCycle.vue'

export default {
    name: 'App',
    components: {
        // Child, User, HtmlBind, Student, Teacher, Form, FormModifier, ComputedProp, Watchers, Slots, Java, Php, Node,
        // Footer,
        // LifeCycle,
    },
    data() {
        return {
            // user: {
            //     name: "RInkal",
            //     email: "rin@gmail.com"
            // },
            // users: [{
            //         name: "RInkal",
            //         email: "rin@gmail.com"
            //     },
            //     {
            //         name: "abca",
            //         email: "sss@gmail.com"
            //     },
            //     {
            //         name: "nnn",
            //         email: "fff@gmail.com"
            //     }
            // ],
            // name :"Rinkulll",
            // childUser : " ",
            // tab:"Java"
        }
    },
    methods: {
        // getData() {
        //     console.log('function called');
        //     alert('function called done');
        // },
        // getcompo(name) {
        //     alert(name);
        // },
        // how to pass data child component to Parent component 

        // getUsername(userName){
        //   alert(userName);
        //   this.childUser = userName
        // }
    }
}
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>
