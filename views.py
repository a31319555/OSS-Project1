from django.shortcuts import render
import urllib.request
import json


def home(request):
    return render(request, 'home.html')


def map(request):
    return render(request, 'map.html')


def search(request):
    if request.method == 'POST':
        city = request.POST['city']
        source = urllib.request.urlopen('http://api.openweathermap.org/data/2.5/weather?q=' +
                                        city + '&units=metric&lang=kr&appid=74fae79924ca8fb453a503aceaa6a25d').read()
        list_of_data = json.loads(source)
        data = {
            "country_code": str(list_of_data['sys']['country']),
            "temp": str(list_of_data['main']['temp']) + ' °C',
            "pressure": str(list_of_data['main']['pressure']),
            "humidity": str(list_of_data['main']['humidity']),
            'description': str(list_of_data['weather'][0]['description']),
        }
        print(data)
    else:
        data = {}
    return render(request, "search.html", data)
