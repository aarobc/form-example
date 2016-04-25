<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                padding-top:40px;
            }
        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple form</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
                               crossorigin="anonymous">

    </head>
    <body>

        <div id="app" class="container">

            <div v-if="response.errors.length" class='row'>
                <div class='alert alert-warning col-md-4 col-md-offset-4'>
                    <ul>
                        <li v-for="err in response.errors">
                            {{ err }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class='row'
                            v-if="!response.data.length">
                <div class='col-md-4 col-md-offset-4'>
                    <form class="form" action='#'
                          v-on:submit.prevent="submit">
                        <h3>Simple Form</h3>
                        <input type="text"
                               v-model="form.name"
                               class="form-control" placeholder="Name" required autofocus>
                        <input type="text"
                               v-model="form.number"
                               class="form-control" placeholder="number" required>
                        <button type='submit' class="btn btn-lg btn-primary btn-block"
                                              type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class='row' v-if="response.data.length">
                <div class='col-md-4 col-md-offset-4'>
                    <h4>response<h4>
                    <ul>
                        <li v-for="item in response.data">
                            {{ item.value }}
                        </li>
                    </ul>
                    <button v-on:click="response.data = []" class="btn">return</div>
                </div>
            </div>

            <!-- if there is a response, we display it here -->
        </div>

        <script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js">
        </script>
        <script src="/script.js"></script>
    </body>
</html>

