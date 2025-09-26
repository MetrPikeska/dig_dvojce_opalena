# dig_dvojce_opalen# Digitální dvojče Ski areálu Opálená (VYGEO)

Tento repozitář obsahuje projekt **VYGEO – digitální dvojče ski areálu Opálená**.  
Cílem je vytvořit webovou aplikaci, která propojuje **geografická data, kamerové záznamy a detekci objektů (ovcí) pomocí umělé inteligence**.  

Projekt kombinuje:
- **Leaflet.js** pro interaktivní mapu ski areálu  
- **YOLOv8 (Ultralytics)** pro počítání ovcí ze streamu webkamery  
- **PHP backend** pro ukládání a poskytování dat (aktuální stav + historie)  
- **Chart.js** pro vizualizaci statistiky počtu ovcí  
- **Mapy.cz API** pro mapové podklady  

---

## 🚀 Funkce
- Interaktivní mapa ski areálu Opálená s vrstvami:
  - ortofoto,
  - vleky (s dynamickým zabarvením podle počtu ovcí),
  - potrubí,
  - webkamera.
- **Dashboard** ukazuje počet ovcí na svahu v reálném čase.  
- **Barva vleků** se mění podle obsazenosti:
  - 0–1 ovce = zelená  
  - 2–4 ovce = oranžová  
  - 5+ ovcí = červená
- **Logování do CSV** – všechny hodnoty se ukládají do `sheep_log.csv` (časová značka + počet).  
- **Statistiky a graf** – vizualizace posledních hodnot pomocí Chart.js přímo v aplikaci.  

---

## 📂 Struktura repozitáře

