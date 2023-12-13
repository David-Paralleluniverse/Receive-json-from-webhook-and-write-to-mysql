# MQTT-to-MySQL Project

## 项目概述

本项目的目标是通过使用PHP，接收来自开源MQTT服务器发送的JSON信息，并将这些信息写入MySQL数据库。通过这个过程，实现对物联网设备数据的有效管理和存储。

## 技术栈

- **PHP:** 用于处理MQTT消息的接收和MySQL数据库的连接与操作。
- **MQTT:** 开源MQTT服务器，作为物联网设备和服务器之间的消息传递协议。
- **MySQL:** 用于存储接收到的MQTT消息的数据库。

## 主要功能

1. **MQTT消息接收：** 使用PHP连接到MQTT服务器，监听指定的MQTT主题，接收JSON格式的消息。

2. **数据库存储：** 将接收到的MQTT消息解析并存储到MySQL数据库中，确保数据的持久性和可查询性。

## 如何使用

1. 克隆项目到本地：

   ```bash
   git clone git@github.com:David-Paralleluniverse/Receive-json-from-webhook-and-write-to-mysql.git
配置MQTT和MySQL连接信息：

在 functs/connect.php 文件中，填写MySQL数据库的连接信息。

anjson.php是主接收文件

贡献
欢迎贡献代码、报告问题或提出改进建议。在贡献之前，请查看贡献指南。

授权
本项目采用 GPL V3 许可证。
