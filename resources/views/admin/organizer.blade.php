<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://unpkg.com/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>

<div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-center px-5 py-5">
    <div class="w-full mx-auto rounded-lg border border-gray-700 p-8 lg:py-12 lg:px-14 text-gray-300" style="max-width: 800px" x-data="app()" x-init="addItem()">
        <div class="mb-10">
            <h1 class="text-2xl font-bold"><i class="mdi mdi-star text-yellow-300 text-3xl leading-none align-bottom"></i> Todos</h1>
        </div>
        <div class="mb-10">
            <template x-if="todos.length">
                <ul @click.away="defocusItems()" class="-mx-1">
                    <template x-for="(item,index) in todos">
                        <li @click="focusItem(index)" @dblclick="openItem(index)" class="px-2 py-2 rounded transition-all flex text-md" :class="{'bg-indigo-800':item.focused,'bg-gray-700 shadow-lg px-4 py-4 my-10 -mx-2':item.open,'mb-1 cursor-pointer':!item.open}" :key="index">
                            <div class="flex-none w-10 leading-none">
                                <input type="checkbox" :checked="item.checked" @click="item.checked=!item.checked">
                            </div>
                            <div class="flex-grow max-w-full">
                                <div class="w-full leading-none">
                                    <h3 class="text-md leading-none truncate w-full pr-10" :class="item.title.length?'text-gray-300':'text-gray-500'" x-text="item.title||'New todo...'" x-show="!item.open"></h3>
                                    <input type="text" x-show="item.open" class="text-md w-full bg-transparent text-gray-300 leading-none focus:outline-none mb-2" x-model="item.title" :id="`titleField${index}`" placeholder="New todo..."/>
                                </div>
                                <div class="w-full" x-show="item.open">
                                    <textarea class="text-md w-full bg-transparent text-gray-300 leading-tight focus:outline-none" rows="10" x-model="item.notes" placeholder="Notes"></textarea>
                                </div>
                                <div class="w-full flex justify-end" x-show="item.open">
                                    <button class="p-1 -mr-1 focus:outline-none hover:text-red-300" @click="removeItem(index)"><i class="mdi mdi-trash-can-outline"></i></button>
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
            </template>
            <template x-if="!todos.length">
                <p class="text-gray-500">No todos</p>
            </template>
        </div>
        <div class="flex justify-center">
            <button class="py-1 px-10 border border-gray-800 hover:border-gray-700 rounded leading-none focus:outline-none text-xl" @click="addItem()"><i class="mdi mdi-plus"></i></button>
        </div>
    </div>
</div>

<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="flex flex-grow flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden"><div class="border-b"><div class="flex justify-between pl-6 -mb-px"><h3 class="text-blue-dark py-4 font-normal text-lg">Vacation Settings</h3><div class="flex"></div></div></div><div class="flex px-2 py-2 -mb-px"><div class="flex flex-wrap bg-white overflow-hidden"><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">December 2018</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer bg-blue text-white">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer bg-blue text-white">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">January 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">February 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">March 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">April 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">May 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td></tr></table></div></div></div></div></div>
</div>




<script>
function app(){
    return {
        todos: [],
        focusItem: function(index) {
            if ( !this.todos[index].open ) {
                for(let i = 0; i < this.todos.length; i++){
                    this.todos[i].open = false;
                    this.todos[i].focused = i == index;
                }
            }
        },
        openItem: function(index) {
            for(let i = 0; i < this.todos.length; i++){
                this.todos[i].focused = false;
                this.todos[i].open = i == index;
            }
            setTimeout(()=>document.getElementById(`titleField${index}`).focus(),10);
        },
        defocusItems: function() {
            for(let i = 0; i < this.todos.length; i++){
                this.todos[i].focused = false;
                this.todos[i].open = false;
            }
        },
        removeItem: function(index) {
            this.todos = this.todos.filter((todo, i) => {
                return i == index ? false : true;
            });
            setTimeout(()=>this.defocusItems(),10);
        },
        addItem: function() {
            this.todos.push({
                title: '',
                notes: '',
                checked: false,
                focused: false,
                open: false
            });
            setTimeout(()=>this.openItem(this.todos.length-1),10);
        }
    }
}
</script>

<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
        </a>
    </div>
</div>
</body>
</html>
