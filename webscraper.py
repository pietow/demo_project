import requests
from bs4 import BeautifulSoup

URL = 'https://www.bmw.de/de/fastlane/bmw-partner.html#/dlo/DE/de/BMW_BMWM?type=location&term=Nordrhein-Westfalen,%20Deutschland'
page = requests.get(URL)
soup = BeautifulSoup(page.content, 'html.parser')
results = soup.body
cookies = dict(cc_digital_sessionCookie='461099141488')
print(results.prettify())

#url = "https://google-search3.p.rapidapi.com/api/v1/search"
#
#querystring = {"get_total":"false","country":"DE","language":"lang_de","max_results":"100",
#    "uule":"w%2BCAIQICIbSG91c3RvbixUZXhhcyxVbml0ZWQgU3RhdGVz","hl":"de","q":"BMW Autohändler"}
#
#headers = {
#    'x-rapidapi-host': "google-search3.p.rapidapi.com",
#    'x-rapidapi-key': "c00175f710msh033476d25c928cdp1da665jsnf6716119639e"
#    }
#
#response = requests.request("GET", url, headers=headers, params=querystring)
#
#print(response.text)