<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-10">
    <div class="p-6 bg-backdrop border-b border-backdrop">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<h2>Create Document</h2>

<hr>
<form action="{{route('createRegis')}}" method="post" enctype="multipart/form-data" class="grid grid-cols-2 gap-2">
    @csrf
    <div class="py-2 col-span-2">
        Date :
        <input class="bg-backdrop rounded-md" type="date" disabled name="date" value="{{date('Y-m-d')}}" id="">

    </div>
    <div class="py-2">

        <input id="name" value="{{ Auth::user()->name }}"
        class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-accent' : ''}}"
        type="text"
        name="name"
        value="{{ old('name') }}"
        readonly
        />
        <label for="name"
        class="block font-medium text-sm text-content{{$errors->has('name') ? ' text-accent' : ''}}">
        {{ __('Name') }}
        </label>
    </div>
    <div class="py-2">

        <input id="name" value="{{ Auth::user()->email }}"
        class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('email') ? ' border-accent' : ''}}"
        type="email"
        name="email"
        value="{{ old('email') }}"
        readonly
        />
        <label for="email"
        class="block font-medium text-sm text-content{{$errors->has('email') ? ' text-accent' : ''}}">
            {{ __('Email') }}</label>
    </div>
    <div class="py-2">

        <input id="department" value="{{ Auth::user()->department }}" class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('department') ? ' border-accent' : ''}}"
        type="text"
        name="department"
        value="{{ old('department') }}"
        />
        <label for="department" class="block font-medium text-sm text-content{{$errors->has('department') ? ' text-accent' : ''}}">
            {{ __('Department') }}</label>
    </div>
    <div class="py-2">

        <input id="departmenthead" value="{{ Auth::user()->departmenthead }}" class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('departmenthead') ? ' border-accent' : ''}}"
        type="text"
        name="departmenthead"
        value="{{ old('departmenthead') }}"
        />
        <label for="departmenthead" class="block font-medium text-sm text-content{{$errors->has('departmenthead') ? ' text-accent' : ''}}">
            {{ __('Department Head') }}</label>
    </div>
    <hr class="col-span-2">
    <div class="py-2">
        Dar Number :

        <input class="bg-backdrop rounded-md"  name="DocCode" type="text"  value="{{'DAR'.date('Y').str_pad(random_int( 0, 9000 ) ,4,'0')}}">
    </div>

    
        <span>
            <label for="type">Type</label>
            <select class="bg-backdrop rounded-md"  name="type" id="type">
                <optgroup label="Document">
                    <option disabled>SM: System Manual</option>
                    <option disabled>PR: Procedure</option>
                    <option disabled>WI: Work Instruction</option>
                    <option disabled>SD: Standard</option>
                    <option disabled>SP: Specification</option>
                    <option >DS/MK: Document Support</option>
                    <option disabled>MN: Manual</option>
                </optgroup>
                <optgroup label="Form">
                    <option disabled>ADS</option>
                    <option disabled>ENG</option>
                    <option disabled>HRM</option>
                    <option disabled>Other Dept. ...</option>
                </optgroup>

                <optgroup label="External">
                    <option disabled>Report from external</option>
                </optgroup>

                <optgroup label="Record">
                    <option disabled>KPIs</option>
                    <option disabled>Risk ISO9001</option>
                    <option disabled>Rish ISO45001</option>
                    <option disabled>Chemical List</option>
                    <option disabled>Legal & Compliance</option>
                    <option disabled>Communication Plan</option>
                    <option disabled>Review DCC&REC</option>
                    <option disabled>Other</option>
                </optgroup>
                {{-- <optgroup label="Training system">
                    <option>diamond</option>
                    <option>unprotected</option>
                    <option>consider</option>
                </optgroup> --}}
            </select>
        </span>
        <div class="py-2 col-span-2">
        Document Name :
        <input maxlength="10" class="bg-backdrop-dark rounded-md" type="text" name="Doc_Name">

    </div>
                    
    <div class="py-2">
        <p>Objective </p>
        <div class="flex flex-col md:flex-row justify-around flex-wrap">
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-1"><label for="objective-1" selected>ขอเอกสารใหม่ </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-2"><label for="objective-2">เปลี่ยนแปลง </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-3"><label for="objective-3">ขอนำเข้าเอกสารภายนอก </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-4"><label for="objective-4">ขอเพิ่ม / เปลี่ยนแปลง / ยกเลิกผู้ถือครอง </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-5"><label for="objective-5">ขอสำเนาเอกสาร </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-6"><label for="objective-6">ขอยกเลิก </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-7"><label for="objective-7">ขอทำลาย </label></span>
            <span><input class="px-2 mx-2" type="radio" name="objective" id="objective-8"><label for="objective-8">อื่นๆ </label></span>
        </div>
    </div>

    <span class="flex flex-col">
        <label for="info">รายละเอียดการแก้ไข </label>
        <textarea name="info" id="info" cols="30" rows="5" class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{$errors->has('name') ? ' border-accent' : ''}}"></textarea>
    </span>

    <div class="flex flex-wrap items-center">
        <span class="px-4">
            <span class="px-4">
                
            <label for="dateUse">date-use :  </label>
            <input type="date" name="usedate" id="dateUse" value="{{Carbon\Carbon::now()->toDateString()}}" min="{{Carbon\Carbon::now()->toDateString()}}" class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50  my-2 {{$errors->has('name') ? ' border-accent' : ''}}"></span>
            <label for="dateKeep">Year Life :  </label>
            <input type="number" name="Year" id="Year" value="1" min="1" max="10" step="1" class="bg-backdrop-dark rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50  my-2 {{$errors->has('name') ? ' border-accent' : ''}}"></span>Year(s)
        <span class="px-4">
            <label>File</label>
            <input type="file" name="file">
        </span>
    </div>


        <div class="flex justify-end mt-4 ">
            <!-- <button  class='mr-5 inline-flex items-center px-4 py-2 bg-backdrop-inv border border-transparent rounded-md font-semibold text-xs text-content-inv uppercase tracking-widest hover:bg-backdrop-light active:bg-backdrop-light focus:outline-none focus:border-backdrop-light focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                {{ __('Add More') }}
            </button> -->

            <button  class='inline-flex items-center px-4 py-2 bg-backdrop-inv border border-transparent rounded-md font-semibold text-xs text-content-inv uppercase tracking-widest hover:bg-backdrop-light active:bg-backdrop-light focus:outline-none focus:border-backdrop-light focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                {{ __('Create') }}
            </button>
        </div>
    </form>
</div>
    </div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
