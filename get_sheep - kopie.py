import requests
url = "https://petrmikeska.cz/vygeo/update.php"
for c in [0,1,2,3,5,7,9
,11,13,15,17,19,21,23,25,27,29,31,33,35]:
    payload = {"timestamp":"2025-09-26 21:00:00","count": c}
    r = requests.post(url, json=payload, timeout=5)
    print(c, r.status_code, r.text)
