

document.addEventListener("DOMContentLoaded", () => {


    //const getCartridges = document.getElementById('get_cartridge');
    //const getPC = document.getElementById('get_pc');
    //const getPrinter = document.getElementById('get_printer');


    const writeCartridge = document.getElementById('write_cartridge');
    const writePC = document.getElementById('write_pc');
    const writePrinter = document.getElementById('write_printer');


    const cartridgeForm = document.querySelector('.cartridge_form');
    const pcForm = document.querySelector('.pc_form');
    const printerForm = document.querySelector('.printer_form');

    const output = document.querySelector('.output')


    $('#get_cartridge').on("click", function(e) {

        $('#send_success').attr('style', 'display:none');
        pcForm.style.display = "none";
        cartridgeForm.style.display = "none";
        printerForm.style.display = "none";

        //Получаем с сервера и выводим на клиент список картриджей
        $.ajax({
            url: '../server/showdata.php',
            method: 'GET',
            data: {
                technic: 'cartridges'
            },
            success: function(data){
                console.log('Receiving cartridges successfully');
                const wrapperToRenderForms = document.querySelector('.output');

                while(wrapperToRenderForms.firstChild){
                    wrapperToRenderForms.removeChild(wrapperToRenderForms.lastChild);
                 }
                    data = JSON.parse(data);
                    for(let key in data){
                        const divInputWrapper = document.createElement('div');

                        divInputWrapper.innerHTML = `
                           <p>Картридж № ${data[key].cartridge_number} </p>
                           <div class="center">
                           <ul>
                           <div>
                               <li>Модель картриджа: ${data[key].cartridge_model}</li>
                           </div>
                           <div>
                                <li>Номер принтера: ${data[key].printer_number}</li>
                           </div>
                           <div>
                                <li>Отдел сотрудника: ${data[key].department}</li>
                           </div>
                           <div>
                                <li>Номер сотрудника: ${data[key].tel_worker}</li>
                           </div>
                           </ul>
                            </div>`;
                        wrapperToRenderForms.appendChild(divInputWrapper);
                    }
                    wrapperToRenderForms.style.display = "block";
            }

        });

    });

    //Получаем с сервера и выводим на клиент список ПК
    $('#get_pc').on("click", function(e) {
        $('#send_success').attr('style', 'display:none');
        pcForm.style.display = "none";
        cartridgeForm.style.display = "none";
        printerForm.style.display = "none";
        output.style.display = "none";


        $.ajax({
            url: '../server/showdata.php',
            method: 'GET',
            data: {
                technic: 'pc'
            },
            success: function(data){
                console.log('Receiving PC successfully');
                const wrapperToRenderForms = document.querySelector('.output');

                while(wrapperToRenderForms.firstChild){
                    wrapperToRenderForms.removeChild(wrapperToRenderForms.lastChild);
                }
                data = JSON.parse(data);
                for(let key in data){
                    const divInputWrapper = document.createElement('div');

                    divInputWrapper.innerHTML = `
                           <p>Персональный компьютер № ${data[key].pc_number} </p>
                           <div class="center">
                           <ul>
                           <div>
                               <li>Модель: ${data[key].pc_model}</li>
                           </div>
                           <div>
                                <li>Дата выпуска: ${data[key].pc_release_date}</li>
                           </div>
                           <div>
                                <li>Срок службы: ${data[key].pc_service_life}</li>
                           </div>
                           <div>
                                <li>Состав: ${data[key].pc_structure}</li>
                           </div>
                           <div>
                                <li>Расположение: ${data[key].pc_location}</li>
                           </div>
                           <div>
                                <li>Ответственный: ${data[key].pc_responsible}</li>
                           </div>
                           <div>
                                <li>Примечание: ${data[key].pc_note}</li>
                           </div>
                           
                           </ul>
                            </div>`;
                    wrapperToRenderForms.appendChild(divInputWrapper);
                }
                wrapperToRenderForms.style.display = "block";

            }
        });
    });

    //Получаем с сервера и выводим на клиент список принтеров
    $('#get_printer').on("click", function(e)  {
        $('#send_success').attr('style', 'display:none');
        pcForm.style.display = "none";
        cartridgeForm.style.display = "none";
        printerForm.style.display = "none";
        output.style.display = "none";

        $.ajax({
            url: '../server/showdata.php',
            method: 'get',
            data: {
                technic: 'printers'
            },
            success: function(data){
                console.log('Receiving printers successfully');
                const wrapperToRenderForms = document.querySelector('.output');

                while(wrapperToRenderForms.firstChild){
                    wrapperToRenderForms.removeChild(wrapperToRenderForms.lastChild);
                }
                data = JSON.parse(data);
                for(let key in data){
                    const divInputWrapper = document.createElement('div');

                    divInputWrapper.innerHTML = `
                           <p>Принтер № ${data[key].printer_number} </p>
                           <div class="center">
                           <ul>
                           <div>
                               <li>Модель: ${data[key].printer_model}</li>
                           </div>
                           <div>
                                <li>Дата выпуска: ${data[key].printer_release_date}</li>
                           </div>
                           <div>
                                <li>Срок службы: ${data[key].printer_service_life}</li>
                           </div>
                           <div>
                                <li>Расположение: ${data[key].printer_location}</li>
                           </div>
                           <div>
                                <li>Ответственный: ${data[key].printer_responsible}</li>
                           </div>
                           </ul>
                            </div>`;
                    wrapperToRenderForms.appendChild(divInputWrapper);
                }
                wrapperToRenderForms.style.display = "block";
            }
        });
    });


    writeCartridge.addEventListener("click", () =>{
        cartridgeForm.style.display = "block";
        pcForm.style.display = "none";
        printerForm.style.display = "none";
        output.style.display = "none";
        $('#send_success').attr('style', 'display:none');

        console.log('Записать картридж в БД');
    });

    writePC.addEventListener("click", () =>{
        pcForm.style.display = "block";
        cartridgeForm.style.display = "none";
        printerForm.style.display = "none";
        output.style.display = "none";
        $('#send_success').attr('style', 'display:none');

        console.log('Записать ПК в БД');
    });

    writePrinter.addEventListener("click", () =>{
        printerForm.style.display = "block";
        pcForm.style.display = "none";
        cartridgeForm.style.display = "none";
        output.style.display = "none";
        $('#send_success').attr('style', 'display:none');

        console.log('Записать принтер в БД');
    });

    //Отправляем данные с формы на сервер
    $('.form-index').on("submit", function(e){
        e.preventDefault();

        let parent = $(this).parent()[0].className;
        let msg = $(this).serialize();

        $.ajax({
            url: '../server/insertdata.php',
            method: 'POST',
            data: msg,
            success: function(data){
                console.log("Sending data successfully");

                $('.'+ parent).attr('style', 'display:none');
                $('#send_success').attr('style', 'display:block');
            }, error: function (){
                console.log('Ничего не пришло от сервера, ошибка');
                $('#send_success').attr('style', 'display:none');
            }
        });
    });



});


