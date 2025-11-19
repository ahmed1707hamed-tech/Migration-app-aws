# 🛠️ On-Prem to AWS Migration Project  
A complete migration of a local PHP + MySQL application (On-Prem) to AWS using **EC2 + RDS**. This project demonstrates how a traditional on-prem web application can be migrated into a scalable and cloud-ready architecture.

# 📦 Project Overview
This project simulates a real-world migration scenario:
- Local application (PHP + Apache + MySQL on XAMPP)
- Migrated to AWS EC2 (Apache + PHP)
- Database exported from local machine and imported into AWS RDS (MySQL)
- Application fully running on AWS infrastructure

This migration follows the same steps companies use when moving workloads to the cloud.

# 🏗️ Architecture
Local XAMPP App  →  EC2 (Apache + PHP)  
Local MySQL → RDS (MySQL)  
Images stored on EC2

AWS Services Used:
- Amazon EC2
- Amazon RDS (MySQL)
- Security Groups
- SSH + SCP
- MySQL Client

# 🚀 Migration Steps (Summary)

## 1️⃣ Local On-Prem Setup
- Created PHP application on XAMPP
- Built database with table: `items`
- Added upload + display functionality

## 2️⃣ Export the Local Database
Exported from phpMyAdmin as SQL → `migrationdb.sql`

## 3️⃣ Create EC2 Instance
- Ubuntu Server 22.04  
- Installed Apache + PHP  
- Uploaded project using SCP  
- App accessible via EC2 Public IP

## 4️⃣ Create RDS MySQL Instance
- Free-tier MySQL  
- Enabled public access (temporarily)
- Added inbound rule on port 3306  
- Connected from EC2 using mysql client

## 5️⃣ Import Database into RDS
