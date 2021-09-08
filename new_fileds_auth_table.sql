USE [Account]
GO

/****** Object:  Table [dbo].[cabal_auth_table]    Script Date: 08/09/2021 16:06:26 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[cabal_auth_table](
	[UserNum] [int] IDENTITY(1,1) NOT NULL,
	[ID] [varchar](50) NOT NULL,
	[Password] [varbinary](256) NULL,
	[Login] [int] NOT NULL,
	[LoginTime] [datetime] NULL,
	[LogoutTime] [datetime] NULL,
	[AuthType] [int] NOT NULL,
	[PlayTime] [int] NOT NULL,
	[IdentityNo] [char](13) NULL,
	[LoginEx] [int] NOT NULL,
	[LastIp] [char](16) NULL,
	[AuthKey] [varchar](32) NULL,
	[nation_Code] [int] NOT NULL,
	[createDate] [datetime] NULL,
	[Email] [varchar](200) NULL,
	[IP] [varchar](50) NULL,
	[Question] [varchar](200) NULL,
	[Answer] [varchar](200) NULL,
	[LoginCounter] [int] NULL,
	[Rg] [varchar](12) NULL,
	[BirthDate] [date] NULL,
	[City] [varchar](60) NULL,
	[State] [varchar](2) NULL,
	[WebNickname] [varchar](16) NULL,
	[RequestCode] [char](64) NULL,
	[InviteCode] [char](64) NULL,
	[Country] [varchar](60) NULL,
	[uName] [varchar](60) NULL,
	[Lastname] [varchar](60) NULL,
	[IsAtivada] [int] NULL,
	[IsVerificada] [int] NULL,
	[Estado] [varchar](100) NULL,
	[ArcandiusWhatsapp] [varchar](50) NULL,
	[ArcandiusToken] [varchar](50) NULL,
 CONSTRAINT [PK_cabal_auth_table] PRIMARY KEY CLUSTERED 
(
	[UserNum] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF_cabal_auth_table_AuthType]  DEFAULT ((1)) FOR [AuthType]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF_cabal_auth_table_PlayTime]  DEFAULT ((0)) FOR [PlayTime]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF_cabal_auth_table_LoginEx]  DEFAULT ((0)) FOR [LoginEx]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF_cabal_auth_table_AuthKey]  DEFAULT ('') FOR [AuthKey]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF__cabal_aut__natio__2A164134]  DEFAULT ((0)) FOR [nation_Code]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF__cabal_aut__creat__3A4CA8FD]  DEFAULT (getdate()) FOR [createDate]
GO

ALTER TABLE [dbo].[cabal_auth_table] ADD  CONSTRAINT [DF__cabal_aut__Login__2AD55B43]  DEFAULT ((0)) FOR [LoginCounter]
GO

