#!/usr/bin/env python3

# -*- coding: utf-8 -*-

# pyWWR creates, retrieves, updates and deletes wwr entries
# repository: github.com/WhosWho-Rockart/pyWWR

# dependencies (debian, ubuntu):
# sudo apt install python3 python3-pip python3-ruamel.yaml python3-bottle python3-eventlet sqlite3

# dependencies (macOS, Windows):
# download installer from https://www.python.org/downloads/
# pip3 install ruamel.yaml bottle eventlet

# usage: python3 -m main

import yaml

document = """
id: 'none' # do not edit

surname: '(e.g., Abreu)'
forenames: '(e.g., Maria Emilia Simões de)'
initials: '(e.g., M. E.)'
lineage: '(e.g., Jr.)'
honorific_prefix: '(e.g., Professora Doutora)'
honorific_suffix: '(e.g., none)'

year_of_birth: '(e.g., 1959)' # none denotes non-disclosure
month_of_birth: '(e.g., none)' # none denotes non-disclosure
day_of_birth: '(e.g., none)' # none denotes non-disclosure
place_of_birth: '(e.g., Johannesburg)' # none denotes non-disclosure
country_of_birth: '(e.g., South Africa)' # none denotes non-disclosure

affiliation:
  # duplicate and edit lines below to add an affiliation
  -
    organization: '(e.g., Universidade de Trás-os-Montes e Alto Douro)'
    abbreviation: '(e.g., UTAD)'
    section:
      # duplicate and edit a line to add a section
      # delete a line to remove a section
      - '(e.g., Unidade de Arqueologia)'  # or none
      - '(e.g., Departamento de Geologia)'
      - '(e.g., Escola de Ciências da Vida e do Ambiente)'
    position: '(e.g., Professor auxiliar)'
    year_joined: '(e.g., 1996)'

former_affiliation:
  # duplicate and edit lines below to add a former affiliation
  -
    organization: '…'
    abbreviation: '…' # or none
    section:
      # duplicate and edit a line to add a section
      # delete a line to remove a section
      - '…'
      - '…'
    position: '…'
    year_joined: '…'
    year_left: '…'

award:
  # duplicate and edit lines below to add an award
  -
    organization: '(e.g., American Rock Art Research Association'
    abbreviation: '(e.g., ARARA)' # or none
    award: '(e.g., The ARARA Conservation and Preservation Award)'
    year_given: '(e.g., 1996)'

education:
  # duplicate and edit lines below to add a qualification
  -
    discipline: '(e.g., Quaternary and Prehistory)'
    establishment: '(e.g., Universidade de Trás-os-Montes e Alto Douro)'
    qualification: '(e.g., PhD)'
    year_attained: '(e.g., 2012)'

language:
  # duplicate and edit a line to add a language
  # delete a line to remove a language
  - '(e.g., Portuguese)' # Mother language
  - '(e.g., English)' # Other languages in order of fluency

discipline:
  # delete lines that do not apply
  # duplicate and edit a line to add a discipline
  - 'Anthropology'
  - 'Archaeology'
  - 'Computer Science'
  - 'Geography'
  - 'History'
  - 'History of Art'
  - 'History of Religions'
  - 'Museum Studies'
  - 'Sociology'

research_interests:
  # delete lines that do not apply
  # duplicate and edit a line to add an interest
  - 'Analysis'
  - 'Conservation'
  - 'Education'
  - 'Inventory'
  - 'Recording'
  - 'Site Management'
  - 'Linguistics'
  - 'Semiotics'

research_zone:
  # delete lines that do not apply
  - 'Africa'
  - 'Asia'
  - 'Europe'
  - 'Americas'
  - 'Oceania'

research_interval:
  from: '(e.g. 12000 denotes 12000 years ago)'
  to: '(e.g. 0 denotes the present day)'

research_period:
  # delete lines that do not apply
  # duplicate and edit a line to add a period
  - 'Upper Palaeolithic'
  - 'Mesolithic'
  - 'Neolithic'
  - 'Chalcolithic'
  - 'Bronze Age'
  - 'Iron Age'
  - 'Mediaeval'

research_project:
  # duplicate and edit lines below to add a research project
  -
    title: '(e.g., Rock-art of Dos Sotto Laiolo)'
    year_started: '(e.g., 1984)'
    year_finished: '(e.g., none)' # none denotes it continues
    site_name: '(e.g., Dos Sotto Laiolo)'
    site_area: '(e.g., Valcamonica)'
    town: '(e.g., Paspardo)' # nearest town
    post_code: '(e.g., 25050)' # post code, ZIP, etc.
    province: '(e.g., Brescia)' # province, region, state, etc.
    country: '(e.g., Italy)'
    latitude: '(e.g., 40.714728)' # none denotes non-disclosure
    longitude: '(e.g., -73.998672)' # none denotes non-disclosure
    note: '(e.g., none)' # none denotes no further information

address:
  # duplicate and edit lines below to add an address
  -
    detail:
      # duplicate and edit a line to add information
      # delete a line to remove information
      - '(e.g., Unidade de Arqueologia)'
      - '(e.g., Departamento de Geologia)'
      - '(e.g., Escola de Ciências da Vida e do Ambiente)'
      - '(e.g., Polo I ECVA, Edifício de Geociências)'
      - '(e.g., Quinta de Prados)'
      - '(e.g., Universidade de Trás-os-Montes e Alto Douro)'
    town: '(e.g., Vila Real)'
    post_code: '(e.g., 5000-801)' # post code, ZIP, etc.
    province: '(e.g., region, state, etc.)' # or none
    country: '(e.g., Portugal)'
    latitude: '(e.g., 41.2859527)' # none denotes unknown
    longitude: '(e.g., -7.7392791)' # none denotes unknown

mobile: '(e.g., +1 …)' # none denotes none or non-disclosure
landline: '(e.g., +351 259 350 220)' # or none
fax: '(e.g., +351 259 350 480)' # or none
email: '(e.g., msabreu@utad.pt)' # or none
skype: '(e.g., skype.name)' # none denotes none or non-disclosure

webpage:
  # duplicate and edit lines below to add a webpage
  - '(e.g., http://www.utad.pt)'
  - '(e.g., http://origins.utad.pt)'
  - '(e.g., https://www.facebook.com/unidadearqueologiaUTAD/'

tags:
  # duplicate and edit a line to add a tag
  - '(e.g., prehistoric cooking)' # none denotes no information

note: '(e.g., none)' # none denotes no further information
"""

print(yaml.load(document)["award"])
